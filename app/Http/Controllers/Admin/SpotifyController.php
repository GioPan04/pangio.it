<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SpotifyController extends Controller
{

    public function redirect() {
        $params = [
            'response_type' => 'code',
            'client_id' => env('SPOTIFY_CLIENT_ID'),
            'scope' => 'user-read-recently-played user-top-read',
            'redirect_uri' => 'http://localhost/dashboard/spotify/callback',
        ];

        return redirect('https://accounts.spotify.com/authorize?'.http_build_query($params));
    }

    public function callback(Request $request) {
        $data = $request->validate([
            'code' => 'required'
        ]);

        $res = Http::asForm()
            ->withBasicAuth(env('SPOTIFY_CLIENT_ID'), env('SPOTIFY_CLIENT_SECRET'))
            ->post('https://accounts.spotify.com/api/token', [
                'code' => $data['code'],
                'redirect_uri' => 'http://localhost/dashboard/spotify/callback',
                'grant_type' => 'authorization_code'
            ])
            ->json();


        Cache::forever('spotify.refresh_token', $res['refresh_token']);
        Cache::put(
            'spotify.access_token',
            [
                'token' => $res['access_token'],
                'expires' => now()->addSeconds($res['expires_in'])->timestamp,
            ],
            $res['expires_in']
        );

        return redirect()->route('dashboard::index');
    }
}
