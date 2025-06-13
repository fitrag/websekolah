<?php

namespace App\View\Components;

use App\Models\Coursel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class carousel extends Component
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
        $coursel = Coursel::orderby('id','ASC')
                ->where('status','publish')
                ->paginate(5);
        return view('components.carousel', compact('coursel'));
    }
}
