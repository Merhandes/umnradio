<?php

namespace App\View\Components;

use App\Models\Variable;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class audioplayer extends Component
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
        $streams = Variable::where('type', 'Stream')->get();
        return view('components.audioplayer', ['streams' => $streams]);
    }
}
