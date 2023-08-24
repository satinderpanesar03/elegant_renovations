<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::with('category')->get();
        return view('user.blogs', compact('blogs'));
    }

    public function blogDetail($id){
        $blog = Blog::with('category')->find($id);
        return view('user.blog-detail', compact('blog'));
    }

}
