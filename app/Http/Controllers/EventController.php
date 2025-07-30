<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ivent as Event; // Assuming you have an Event model
use App\Models\Pengaturan;

class EventController extends Controller
{
    public function index()
    {
        // Tampilkan daftar event
        $pengaturan = Pengaturan::first();
        $events = Event::all();
        return view('admin.event.index', compact('events','pengaturan'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan event baru
        return view('admin.event.create'); // Ganti dengan view yang sesuai
    }

    public function store(Request $request)
    {
        // Simpan event baru
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tgl' => 'required|date',
            'lokasi' => 'required|string|max:255',
        ]);
        Event::create($request->all());
        return redirect()->route('admin.event.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        // Tampilkan form untuk mengedit event
        $data = Event::findOrFail($id);
        return view('admin.event.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Perbarui event
        $event = Event::findOrFail($id);
        // create slug
        $event->slug = \Illuminate\Support\Str::slug($request->judul);
        $event->update($request->all());
        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($slug)
    {
        // Hapus event
        $event = Event::where('slug', $slug)->firstOrFail();
        $event->delete();
        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully.');
    }
}
