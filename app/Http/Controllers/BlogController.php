<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(10);
        return response()->json($posts);
    }

    public function show(Request $request, string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return response($post->content());
    }
}
