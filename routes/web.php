<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::get('/go/{name}', 'LinksController@go')->name('links::go');
Route::prefix('/blog')->group(function () {
    Route::get('/', 'BlogController@list')->name('blog::index');
    Route::get('/{slug}', 'BlogController@show')->name('blog::show');
});
