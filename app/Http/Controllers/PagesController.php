<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', ['posts'=>$posts]);
    }

    public function about()
    {
        return view('pages.about');
    }
}
