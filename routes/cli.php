<?php

use Illuminate\Support\Facades\Route;

/* Route::prefix('/blog')->group(function () {
    Route::get('/', 'BlogController@list')->name('blog::index');
    Route::get('/{slug}', 'BlogController@show')->name('blog::show');
}); */

Route::get('/', 'CurlController@index');
Route::get('/blog', 'CurlController@blog');
Route::get('/blog/{slug}', 'CurlController@show_post');
