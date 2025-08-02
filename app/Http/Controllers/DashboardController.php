<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Alumni, Berita,Carousel, Category, Ivent, Jurusan, Mou, Pengaturan};
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $headline = Berita::latest()->first(); // ambil 1 berita utama
        $berita = Berita::where('id', '!=', $headline->id)->latest()->take(6)->get(); // berita lainnya
        
        $coursel = Carousel::orderby('id','ASC')
                ->where('status','publish')
                ->paginate(5);

        $batas = 6;
        $jml_berita = Berita::where('status','publish')->count();
        $data_berita = Berita::where('status','publish')->orderby('id','DESC')->paginate($batas);
        $no = 0; 
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $jurusans = Jurusan::orderby('id','ASC')->get();
        $pengaturan = Pengaturan::first();
        $mou = Mou::all();
        $alumni = Alumni::orderBy('nama')->limit(10)->get();
        $kategori = Category::orderBy('name')->get();
        $komentar = Berita::with('comments')->get(); // gunakan eager loading
        return view('index',compact(
            'no', 
            'data_berita', 
            'jml_berita',
            'coursel',
            'events',
            'jurusans',
            'pengaturan',
            'headline', 
            'berita',
            'mou',
            'alumni',
            'kategori',
            'komentar'
        ));
    }

    public function struktur_organisasi()
    {
        $pengaturan = pengaturan::first();
        return view('organisasi.index_organisasi', compact('pengaturan'));
    }

    public function logo()
    {
        $headline = Berita::latest()->first(); // ambil 1 berita utama
        $berita = Berita::where('id', '!=', $headline->id)->latest()->take(5)->get(); // berita lainnya
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $pengaturan = pengaturan::first();
        return view('organisasi.index_logo', compact('pengaturan','events','berita'));
    }

    public function cari_berita(Request $request)
    {
        $coursel = Carousel::orderby('id','ASC')->paginate(5);
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
    public function all_berita(Request $request)
    {
        $pengaturan = Pengaturan::first();
        $headline = Berita::latest()->first(); // ambil 1 berita utama
        $berita = Berita::where('id', '!=', $headline->id)->latest()->take(5)->get(); // berita lainnya
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $kategoriList = Category::with('Berita')->get(); // relasi: berita()
        return view('berita.all_berita', compact('pengaturan','headline','berita','kategoriList','events'));
    }
    
    public function show($id)
    {
        $pengaturan = Pengaturan::first();
        $coursel = Carousel::orderby('id','ASC')->paginate(5);
        $berita = Berita::findOrFail($id);
        $berita->increment('views');
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        return view('berita.show_berita', compact('berita','coursel','pengaturan','events'));
    }
    public function showsejarah($id)
    {
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $pengaturan = Pengaturan::find($id);
        return view('pengaturan.show_sejarah', compact('pengaturan','events'));
    }

    public function jurusan(Jurusan $jurusan)
    {
        $coursel = Carousel::orderby('id','ASC')->paginate(5);
        $no = 0;
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        
        return view('jurusan', compact('no', 'coursel', 'jurusan', 'events'));
    }

    //event
    public function event()
    {
        $coursel = Carousel::orderby('id','ASC')->paginate(5);
        $no = 0;
        $events = Ivent::where('status','publish')->orderby('id','DESC')->paginate(6);
        $ber = Berita::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $pengaturan = Pengaturan::first();
        return view('event.index', compact('no', 'coursel', 'events', 'ber', 'pengaturan'));
    }
    public function show_event(Ivent $event)
    {
        $coursel = Carousel::orderby('id','ASC')->paginate(5);
        //events all but no same with in view
        $events = Ivent::where('status','publish')->orderby('id','DESC')->limit(3)->get();
        $pengaturan = Pengaturan::first();
        return view('event.show_event', compact('event', 'coursel', 'events','pengaturan'));
    }
}
