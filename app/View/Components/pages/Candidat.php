<?php

namespace App\View\Components\pages;

use App\Models\Offre;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Candidat extends Component
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
        $offres = Offre::all(); 
        return view('components.pages.candidat', compact("offres"));
    }
}
