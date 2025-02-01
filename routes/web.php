<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Putra',
        'title' => 'About Page',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) { //untuk mengambil data post berdasarkan slug menggunakan model binding

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/users', function () {
    return view('users', [
        'title' => 'Users Page',
        'users' => User::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
    ]);
});
