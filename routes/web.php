<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostController;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.user.home', [
        'title' => 'Home'
    ]);
});
Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('post.index');
    Route::get('/posts/{post}', 'show')->name('post.show');
    Route::get('/post/create', 'create')->name('post.create');
});

Route::get('/authors/{user}', function (User $user) {
    return view('pages.blog.posts', [
        'title' => 'Articles By ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{postCategory}', function (PostCategory $postCategory) {
    return view('pages.blog.posts', [
        'title' => 'Articles in ' . $postCategory->name,
        'posts' => $postCategory->posts
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact.contact', [
        'title' => 'Contact'
    ]);
});
Route::get('/about', function () {
    return view('pages.about.about', [
        'title' => 'About'
    ]);
});

Route::controller(CustomAuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
});
