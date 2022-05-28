<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(Request $request)
    {
        $posts = Post::query()->orderBy('id', 'desc')->simplePaginate(10);
        return view('pages.blog', [
            'posts' => $posts
        ]);
    }

    public function show(Request $request, string $slug)
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        return response($post->content());
    }
}
