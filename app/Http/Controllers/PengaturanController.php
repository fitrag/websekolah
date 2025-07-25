<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan; // Assuming you have a Pengaturan model
use Carbon\Carbon;

class PengaturanController extends Controller
{
    //
    public function index()
    {
        // Tampilkan halaman pengaturan
        $pengaturan = Pengaturan::first(); // Ambil pengaturan pertama, sesuaikan dengan kebutuhan
        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        // Proses pembaruan pengaturan
        $request->validate([
            'nama_aplikasi' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'npsn' => 'required|string|max:20',
            'nm_kepsek' => 'required|string|max:255',
            'nip_kepsek' => 'required|string|max:20',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kata_pengantar' => 'required|string',
            'sejarah' => 'required|string',
            'akreditasi' => 'required|string',

        ]);
        if($request->file('logo') == '') {
            $logo = NULL;
        } else {
            $file = $request->file('logo');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $request->categorie_id.'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('logo')->move("images/berita", $fileName);
            $logo = $fileName;
        }

        $pengaturan = Pengaturan::first() ?? new Pengaturan();
        $pengaturan->nama_aplikasi = $request->nama_aplikasi;
        $pengaturan->nama_sekolah = $request->nama_sekolah;
        $pengaturan->alamat_sekolah = $request->alamat_sekolah;
        $pengaturan->visi = $request->visi;
        $pengaturan->misi = $request->misi;
        $pengaturan->npsn = $request->npsn;
        $pengaturan->nm_kepsek = $request->nm_kepsek;
        $pengaturan->nip_kepsek = $request->nip_kepsek;
        $pengaturan->logo = $logo;
        $pengaturan->kata_pengantar = $request->kata_pengantar;
        $pengaturan->sejarah = $request->sejarah;
        $pengaturan->akreditasi = $request->akreditasi;
        $pengaturan->save();
        
        if($pengaturan->wasRecentlyCreated) {
            return redirect()->route('admin.pengaturan.index')->with('success', 'Pengaturan berhasil ditambahkan.');
        } else {
            return redirect()->route('admin.pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
        }
    }
}
