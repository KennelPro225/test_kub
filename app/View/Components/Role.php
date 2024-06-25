<?php

namespace App\View\Components;

use App\Models\Role as ModelsRole;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Role extends Component
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
        $role = ModelsRole::all();
        return view('components.role', ["roles" => $role]);
    }
}
