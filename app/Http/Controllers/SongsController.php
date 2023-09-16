<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SongsController extends Controller
{
    public function index() {
        $token = Cache::get('spotify.access_token')['token'];
        $query = [
            'time_range' => 'short_term',
            'limit' => 10,
        ];
        $res = Http::withToken($token)->get('https://api.spotify.com/v1/me/top/tracks?'.http_build_query($query))->json();
        dd($res);
    }
}
