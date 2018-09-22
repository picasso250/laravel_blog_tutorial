<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Blog;

Route::get('/', function () {
    $blogs = App\Blog::all();

    foreach ($blogs as $blog) {
        echo $blog->title;
    }

    return view('index');
});

Route::get('/p/{id}', function ($id) {
    return view('p');
});

Route::get('/new', 'BlogController@newBlog');