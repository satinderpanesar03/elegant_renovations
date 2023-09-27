<?php

namespace App\View\Components\User;

use App\Models\Design;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Recentdesign extends Component
{
    public $design;
    /**
     * Create a new component instance.
     */
    public function __construct($design)
    {
        $this->design=$design;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $designData = Design::with('gallery')->where('page_type', $this->design)->get();
        return view('components.user.recentdesign', compact('designData'));
    }
}
