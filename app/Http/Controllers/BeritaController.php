<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Berita,Category};
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    
    public function index()
    {
        $berita = Berita::orderby('id','DESC')->get();
        // $dataThumbnail = $berita->thumbnail;
        // $thumbnail= explode(',', $dataThumbnail);
        return view('admin.berita.index_berita', compact('berita'));
    }


    public function create()
    {
        $categori = Category::orderby('name','ASC')->get();
        return view('admin.berita.create_berita', compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'categorie_id' => 'required',
            'title'        => 'required',
            'body'        => 'required',
            
        ]);

        if($request->file('thumbnail') == '') {
            $thumbnail = NULL;
        } else {
            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/berita", $fileName);
            $thumbnail = $fileName;
        }

        if($request->file('foto1') == '') {
            $foto1 = NULL;
        } else {
            $foto1s = $request->file('foto1');
            $dt = Carbon::now();
            $acak1  = $foto1s->getClientOriginalExtension();
            $fileNamefoto1 = $request->categorie_id.'1-'.$dt->format('Y-m-d-H-i-s').'.'.$acak1; 
            $request->file('foto1')->move("images/berita", $fileNamefoto1);
            $foto1 = $fileNamefoto1;
        }
        if($request->file('foto2') == '') {
            $foto2 = NULL;
        } else {
            $foto2s = $request->file('foto2');
            $dt = Carbon::now();
            $acak2  = $foto2s->getClientOriginalExtension();
            $fileNamefoto2 = $request->categorie_id.'2-'.$dt->format('Y-m-d-H-i-s').'.'.$acak2; 
            $request->file('foto2')->move("images/berita", $fileNamefoto2);
            $foto2 = $fileNamefoto2;
        }
        
        if($request->file('foto3') == '') {
            $foto3 = NULL;
        } else {
            $foto3s = $request->file('foto3');
            $dt = Carbon::now();
            $acak3  = $foto3s->getClientOriginalExtension();
            $fileNamefoto3 = $request->categorie_id.'3-'.$dt->format('Y-m-d-H-i-s').'.'.$acak3; 
            $request->file('foto3')->move("images/berita", $fileNamefoto3);
            $foto3 = $fileNamefoto3;
        }
        
        $user_id = auth()->id();

        $t =$thumbnail.','.$foto1.','.$foto2.','.$foto3;
        // $thumbnail = implode(",",Input::get(array('t')));
        Berita::create([
            'categorie_id'    => $request->categorie_id,
            'title'           => $request->title,
            'slug'            => Str::slug($request->title),
            'body'            => $request->body,
            'embeded'         => $request->embeded,
            'thumbnail'       => $t,
            'foto1'            => $foto1,
            'foto2'            => $foto2,
            'foto3'            => $foto3,
            'status'           => $request->status,
            'edit_at'          => $request->edit_at,
            'user_id'          => $user_id,
        ]);

        return redirect('admin/berita')->with('status','Data behasil ditambah');
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
        $categori = Category::all();
        $data = Berita::findOrFail($id);
        $thumbnail = $data->thumbnail;
        // $thumbnail = implode(",",Input::get(array('t')));
        $thumbnail= explode(',', $thumbnail);
        $judul=$thumbnail[0];
    
        return view('admin.berita.edit_berita', compact('data','categori','judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'categorie_id' => 'required',
            'title'        => 'required',
            'body'        => 'required',
            
        ]);

        $berita = Berita::find($id);

        if($request->has('thumbnail'))
        {
            $namafile = $berita->thumbnail;
            File::delete('images/berita/'.$namafile);

            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/berita", $fileName);
            $thumbnail = $fileName;

            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
            $berita->thumbnail = $thumbnail;
            
        }
        else 
        {
            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
        }

         //foto1

        if($request->has('foto1'))
        {
            $namafile = $berita->foto1;
            File::delete('images/berita/'.$namafile);

            $file = $request->file('foto1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto1')->move("images/berita", $fileName);
            $foto1 = $fileName;

            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
            $berita->foto1 = $foto1;
               
        }
        else 
        {
            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
        }

     //foto2
        if($request->has('foto2'))
        {
            $namafile = $berita->foto2;
            File::delete('images/berita/'.$namafile);

            $file = $request->file('foto2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto2')->move("images/berita", $fileName);
            $foto2 = $fileName;

            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
            $berita->foto2 = $foto2;
            
        }
        else 
        {
            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
        }
    
    //foto3
        if($request->has('foto3'))
        {
            $namafile = $berita->foto3;
            File::delete('images/berita/'.$namafile);

            $file = $request->file('foto3');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto3')->move("images/berita", $fileName);
            $foto3 = $fileName;

            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
            $berita->foto3 = $foto3;
            
        }
        else 
        {
            $berita->categorie_id = $request->categorie_id;
            $berita->title = $request->title;
            $berita->slug = Str::slug($request->title);
            $berita->body = $request->body;
            $berita->embeded = $request->embeded;
        }
    
        $berita->update();
        return redirect('berita')->with('status','Data behasil diubah');
    }

    public function update_publish($id)
    {
        $berita = Berita::find($id);
        $berita->status = 'publish';
        $berita->update();
        return redirect('admin/berita')->with('status','Status behasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);

        $namafile = $berita->thumbnail;
        File::delete('images/berita/'.$namafile);

        $namafile1 = $berita->foto1;
        File::delete('images/berita/'.$namafile1);
        
        $namafile2 = $berita->foto2;
        File::delete('images/berita/'.$namafile2);

        $namafile3 = $berita->foto3;
        File::delete('images/berita/'.$namafile3);
        
        $berita->delete();

        return redirect('admin/berita')->with('status','Data behasil hapus');
    }
}
