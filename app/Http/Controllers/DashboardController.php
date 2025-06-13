<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Berita,Coursel};

class DashboardController extends Controller
{
    public function index()
    {
        $coursel = Coursel::orderby('id','ASC')
                ->where('status','publish')
                ->paginate(5);

        $batas = 6;
        $jml_berita = Berita::where('status','publish')->count();
        $data_berita = Berita::where('status','publish')->orderby('id','DESC')->paginate($batas);
        $no = 0; 
        return view('index',compact(
            'no', 
            'data_berita', 
            'jml_berita',
            'coursel'
        ));
    }

    public function cari_berita(Request $request)
    {
        $coursel = Coursel::orderby('id','ASC')->paginate(5);
        $batas = 6;
        $cari = $request->kata;
        $data_berita = Berita::where('title','like',"%".$cari."%")->paginate($batas);
        $no = $batas * ($data_berita->currentPage() - 1);
        return view('berita.cari_berita', compact(
            'data_berita',
            'no',
            'cari',
            'coursel'
        ));
    }
    
    public function show($id)
    {
        $coursel = Coursel::orderby('id','ASC')->paginate(5);
        $berita = Berita::find($id);
        return view('berita.show_berita', compact('berita','coursel'));
    }
}
