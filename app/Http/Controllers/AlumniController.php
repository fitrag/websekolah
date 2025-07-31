<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index(){
        $alumni = Alumni::all();
        return view('admin.alumni.index', compact('alumni'));
    }
    public function create(){
        return view('admin.alumni.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string|max:500',
            'angkatan' => 'required|string|max:10',
            'status_kerja' => 'required|string|max:100',
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/alumni'), $filename);
            $data['foto'] = 'images/alumni/' . $filename;
        }
        Alumni::create($data);
        return redirect()->route('admin.alumni.index');
    }
    public function edit($id){
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }
    public function update(Request $request, $id){
        $alumni = Alumni::findOrFail($id);
        $data = $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string|max:500',
            'angkatan' => 'required|string|max:10',
            'status_kerja' => 'required|string|max:100',
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/alumni'), $filename);
            $data['foto'] = 'images/alumni/' . $filename;
        }
        $alumni->update($data);
        return redirect()->route('admin.alumni.index');
    }
    public function destroy($id){
        $alumni = Alumni::findOrFail($id);
        if (file_exists(public_path($alumni->foto))) {
            unlink(public_path($alumni->foto));
        }
        $alumni->delete();
        return redirect()->route('admin.alumni.index');
    }
}