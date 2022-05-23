<?php

namespace App\Http\Controllers\Cli;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('cli.home');
    }

    public function blog(Request $request)
    {
        $posts = Post::all();
        return view('cli.blog', ['posts' => $posts]);
    }
}
