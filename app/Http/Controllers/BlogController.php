<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        return view('pages.post', [
            'post' => $post
        ]);
    }

    public function thumbnail(Request $request, string $slug)
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $image = Image::canvas(1200, 630, '#0D1821');
        $image->text($post->title, 1200 / 2, 150, function ($text) {
            $text->file(resource_path('fonts/Comfortaa-Bold.ttf'));
            $text->align('center');
            $text->valign('top');
            $text->color('#E03616');
            $text->size(64);
        });

        $image->text('[Gioele Pannetto, pangio.it]', 1200 / 2, 630 - 50, function ($text) {
            $text->file(resource_path('fonts/PressStart2P.ttf'));
            $text->align('center');
            $text->valign('top');
            $text->color('#008148');
            $text->size(26);
        });
        return $image->response('jpg', 75);
    }
}
