<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function go(Request $request, string $name)
    {
        $link = Link::where('name', $name)
            ->where('enabled', 1)
            ->firstOrFail();

        return view('base.redirect', ['url' => $link->url]);
    }
}
