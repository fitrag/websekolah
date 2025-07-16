<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan; // Assuming you have a Jurusan model

class JurusanController extends Controller
{
    public function index()
    {
        // Logic to display the list of jurusan
        $jurusans = Jurusan::all(); // Assuming you have a Jurusan model
        return view('admin.jurusan.index', compact('jurusans')); // Assuming you
    }

    public function create()
    {
        // Logic to show the form for creating a new jurusan
        return view('admin.jurusan.create'); // Assuming you have a view for creating jur
    }

    public function store(Request $request)
    {
        // Logic to store a new jurusan
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required', // Assuming description is a required field
        ]);
        //slug
        $request->merge(['slug' => \Illuminate\Support\Str::slug($request->name)]); // Use Str::slug for slug generation
        Jurusan::create($request->all());
        return redirect()->route('admin.jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Logic to show the form for editing an existing jurusan
        $jurusan = Jurusan::findOrFail($id); // Assuming you have a Jurusan model
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing jurusan
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required', // Assuming description is a required field
        ]);
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());
        return redirect()->route('admin.jurusan.index')->with('success', 'Jurusan berhasil diperbarui');
    }

    public function destroy($slug)
    {
        // Logic to delete a jurusan by slug
        Jurusan::where('slug', $slug)->delete();
        return redirect()->route('admin.jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }
}
