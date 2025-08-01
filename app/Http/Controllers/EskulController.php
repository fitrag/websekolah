<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EskulController extends Controller
{
    public function index()
    {
        $eskul = Eskul::all();
        return view('admin.eskul.index', compact('eskul'));
    }
    public function create()
    {
        return view('admin.eskul.create');
    }
        public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required',
            'kegiatan'   => 'required',
            'thumbnail'  => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'embeded'    => 'nullable',
            'status'     => 'required|in:publish,pending',
            
        ]);

        if($request->file('thumbnail') == '') {
            $thumbnail = NULL;
        } else {
            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->nama_eskul.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/eskul", $fileName);
            $thumbnail = $fileName;
        }

        $t =$thumbnail;
        // $thumbnail = implode(",",Input::get(array('t')));
        Eskul::create([
            'nama_eskul'     => $request->nama_eskul,
            'kegiatan'       => $request->kegiatan,
            'slug'            => Str::slug($request->kegiatan),
            'embeded'         => $request->embeded,
            'thumbnail'       => $t,
            'status'           => $request->status,
        ]);

        return redirect('admin/eskul')->with('status','Data behasil ditambah');
    }
    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('admin.eskul.edit', compact('eskul'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required',
            'kegiatan'   => 'required',
            'thumbnail'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'embeded'    => 'nullable',
            'status'     => 'required|in:publish,pending',
        ]);
        $eskul = Eskul::findOrFail($id);
        if($request->file('thumbnail') == '') {
            $thumbnail = $eskul->thumbnail;
        } else {
            $file = $request->file('thumbnail');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->nama_eskul.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('thumbnail')->move("images/eskul", $fileName);
            $thumbnail = $fileName;
        }
        $t = $thumbnail;
        $eskul->update([
            'nama_eskul'     => $request->nama_eskul,
            'kegiatan'       => $request->kegiatan,
            'slug'            => Str::slug($request->kegiatan),
            'embeded'         => $request->embeded,
            'thumbnail'       => $t,
            'status'           => $request->status,
        ]);
        return redirect('admin/eskul')->with('status','Data behasil diubah');
    }

    public function destroy(Eskul $eskul)
    {
        if ($eskul->thumbnail) {
            unlink(public_path('images/eskul/' . $eskul->thumbnail));
        }
        $eskul->delete();
        return redirect('admin/eskul')->with('status', 'Data berhasil dihapus');
    }

}
