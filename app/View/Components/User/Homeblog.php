<?php

namespace App\View\Components\User;

use App\Models\Blog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Homeblog extends Component
{
    public $blogs;
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
        $this->blogs = Blog::take(3)->get();
        return view('components.user.homeblog');
    }
}
