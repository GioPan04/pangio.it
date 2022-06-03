<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CurlController extends Controller
{
    public function index(Request $request)
    {
        return view('cli.home');
    }

    public function blog(Request $request)
    {
        $posts = Post::all();
        return view('cli.blog.list', ['posts' => $posts]);
    }

    public function show_post(Request $request, string $slug)
    {
        $post = Post::query()->where('slug', $slug)->first();
        if(!$post) return view('cli.blog.error', ['slug' => $slug]);
        return view('cli.blog.show', ['post' => $post]);
    }
}
