<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class BlogRepository {
    public function store(string $title, string $content)
    {
        $post = new Post;
        $post->title = $title;
        // preg_match('/^(?![#.>`[0-9].*$).*/misU', $content, $res);
        $post->description = substr($content, 0, 128);
        $post->save();

        Storage::put('posts/'.$post->id.'.md', $content);
    }
}
