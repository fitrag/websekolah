<?php

namespace App\View\Components;

use App\Models\Berita as ModelsBerita;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// use App\Models\Berita;

class berita extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $headline = ModelsBerita::latest()->first(); // ambil 1 berita utama
        $berita = ModelsBerita::where('id', '!=', $headline->id)->latest()->take(3)->get(); // berita lainnya
        return view('components.berita',compact('headline','berita'));
    }
}
