<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home')->name('home');
Route::get('/go/{name}', 'LinksController@go')->name('links::go');
Route::prefix('/blog')->group(function () {
    Route::get('/', 'BlogController@list')->name('blog::index');
    Route::get('/{slug}', 'BlogController@show')->name('blog::show');
    Route::get('/{slug}/thumbnail', 'BlogController@thumbnail')->name('blog::show::thumbnail');
});

Route::view('/auth/login', 'pages.login')->name('login');
Route::post('/auth/login', 'AuthController@authenticate');

Route::group(['middleware' => 'auth', 'prefix' => '/dashboard'], function () {
    Route::view('/', 'pages.dashboard.home')->name('dashboard::index');
});

Route::redirect('/wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
