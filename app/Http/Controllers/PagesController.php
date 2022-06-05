<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Request $request)
    {
        $post = Post::latest()->first();

        return view('pages.home', [
            'post' => $post
        ]);
    }
}
