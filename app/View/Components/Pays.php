<?php

namespace App\View\Components;

use App\Models\Pays as ModelsPays;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pays extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pays = ModelsPays::all();
        return view('components.pays', ["pays"=>$pays]);
    }
}
