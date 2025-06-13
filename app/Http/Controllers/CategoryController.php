<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Category::orderby('name')->get();
        return view('admin.kategori.index-kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->name);

        $request->validate([
            'name'  => 'required',
        ]);


        // $kategori = Category::create($request->all());
        $kategori = Category::create([
            'name'  =>$request->name,
            'slug'  => Str::slug($request->name),
        ]);
        if($kategori)
        {
            return redirect()->route('admin.kategori.index')->with('success','Berhasil menambahkan data kategori');
        }
        else
        {
            return  redirect()->back()->with('error','Gagal menambahkan data');
        }
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
    public function edit(Category $kategori)
    {
        return view('admin.kategori.edit-kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $kategori)
    {
        $update = $kategori->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        if($update)
        {
            return redirect()->route('admin.kategori.index')->with('success','Berhasil updata data');
        }
        else
        {
            return redirect()->back()->with('error','Gagal hapus data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $kategori)
    {
        $delete = $kategori->delete();
        if($delete)
        {
            return redirect()->route('admin.kategori.index')->with('success','Berhasil hapus data');
        }
        else
        {
            return redirect()->back()->with('error','gagal hapus data');
        }
    }
}
