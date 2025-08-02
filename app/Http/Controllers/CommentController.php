<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $berita_id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'komentar' => 'required'
        ]);

        Comment::create([
            'berita_id' => $berita_id,
            'parent_id' => $request->input('parent_id'), // bisa null
            'nama' => $request->nama,
            'komentar' => $request->komentar,
        ]);

        return redirect()->back()->with('success', 'Komentar Anda telah dikirim.');
    }                               
}

