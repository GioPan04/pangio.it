<?php

use Illuminate\Support\Facades\Route;

/* Route::prefix('/blog')->group(function () {
    Route::get('/', 'BlogController@list')->name('blog::index');
    Route::get('/{slug}', 'BlogController@show')->name('blog::show');
}); */

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog/{slug}', 'HomeController@show_post');
