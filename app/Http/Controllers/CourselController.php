<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Carousel,Category};
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;

class CourselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coursels= Carousel::all();
        return view('admin.coursel.coursel', compact('coursels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coursel.tambah', [
            'coursel' => New Carousel(),
            'categories' => Category::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $attr = $request->all();
        $slug =  \Str::slug(request('title'));
        $attr['slug'] = $slug;

        // $filename = null;

        if($request->file('thumbnail') == '') {
            $thumbnail = NULL;
        } else {
            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $file = $request->file('thumbnail');
            $filename = $request->category.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/slider", $filename);
            $thumbnail = $filename;

        }
        
        
        $attr['categorie_id'] = request('category');

        // dd($attr);
        $attr['thumbnail'] = $thumbnail;
        $attr['status'] = request('status');
        $attr['link'] = request('link');
        $attr['user_id'] = auth()->id();
        
        //create new post
        $coursel = Carousel::create($attr);

        
        // session()->flash('success', 'berhasil di simpan');
        
        return redirect()->to('admin/coursels')->with('success', 'Berhasil menambahkan data Slider');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $coursel = Carousel::findOrFail($id);
        return view('admin.coursel.edit_coursel',compact('coursel','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categories = Carousel::find($id);

        // $request->validate([
        //     'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        if ($request->has('thumbnail')) {
           $imagePath = public_path('images/slider/' . $categories->thumbnail);
            if (file_exists($imagePath)) {
                unlink($imagePath); // hapus gambar dari folder public
            }

            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $file = $request->file('thumbnail');
            $filename = $request->category.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/slider", $filename);
            $thumbnail = $filename;

           Carousel::find($id)->update([
                'categorie_id'  => $request->get('categorie_id'),
                'title'         => $request->get('title'),
                'body'          => $request->get('body'),
                'embeded'       => $request->get('embeded'),
                'status'        => $request->get('status'),
                'link'          => $request->get('link'),
                'thumbnail'     => $thumbnail,
            ]);

            return redirect()->route('admin.coursels')->with('success', 'Data berhasil diperbarui.');
            }

            else
            {
                Carousel::find($id)->update([
                'categorie_id'   => $request->get('categorie_id'),
                'title'          => $request->get('title'),
                'body'           => $request->get('body'),
                'embeded'        => $request->get('embeded'),
                'status'         => $request->get('status'),
                'link'           => $request->get('link'),
            ]);

            }
        


        

        
        // $update = $categories->update($request->all());
        // if($update)
        // {
            return redirect()->route('admin.coursels')->with('success', 'Data berhasil diperbarui.');
        // }
        // else
        // {
        //     return redirect()->back()->with('success','Gagal update data');
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $coursel)
    {
        $imagePath = public_path('images/slider/' . $coursel->thumbnail);
        if (file_exists($imagePath)) {
            unlink($imagePath); // hapus gambar dari folder public
        }
        
        $delete = $coursel->delete();
        if($delete){
            return redirect()->route('admin.coursels')->with('success', 'Berhasil menghapus data');
        }else{
            return redirect()->back()->with('success', 'Gagal menghapus data');
        }
    }
}
