<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::latest('updated_at')->with('user')->get();
        return view('index', compact('posts'));
    }
}
