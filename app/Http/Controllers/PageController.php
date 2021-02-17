<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Post;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
}
