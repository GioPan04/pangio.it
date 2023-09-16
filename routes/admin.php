<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.dashboard.home')->name('dashboard::index');
Route::get('/spotify/redirect', 'SpotifyController@redirect');
Route::get('/spotify/callback', 'SpotifyController@callback');
