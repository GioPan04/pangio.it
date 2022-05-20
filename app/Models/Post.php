<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    protected $appends = [
        'link'
    ];

    protected function link(): Attribute {
        return new Attribute(
            get: fn ($value, $attributes) => route('blog::show', ['slug' => $attributes['slug']])
        );
    }

    protected function title(): Attribute
    {
        return new Attribute(
            set: fn ($value) => [
                'title' => $value,
                'slug' => Str::slug($value)
            ]
        );
    }

    public function content()
    {
        return Storage::get('posts/' . $this->id . '.md');
    }
}
