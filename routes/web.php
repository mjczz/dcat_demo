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

Route::get('/', function () {
    return view('welcome', compact(['user', 'blog']));
});

Route::get('/laravel_favorite', function () {
    $user = \App\User::find(1);
    $blog = \App\Blog::find(4);

    $user->favorite($blog);
    //$user->unfavorite($blog);
    $user->toggleFavorite($blog);

    $user->hasFavorited($blog);
    $blog->isFavoritedBy($user);

    return [
        'user' => $user,
        'blog' => $blog,
        'getFavoriteItems' => $user->getFavoriteItems(\App\Blog::class)->get(),
        'hasFavorited' => $user->hasFavorited($blog),
        'isFavoritedBy' => $blog->isFavoritedBy($user),
    ];
    return view('welcome', compact(['user', 'blog']));
});

