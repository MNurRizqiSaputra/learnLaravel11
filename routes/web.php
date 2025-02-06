<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman beranda
Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',  // Mengirimkan data 'title' ke view 'home'
    ]);
});

// Route untuk menampilkan halaman about
Route::get('/about', function () {
    return view('about', [
        'name' => 'Putra',  // Mengirimkan data 'name' ke view 'about'
        'title' => 'About Page',  // Mengirimkan data 'title' ke view 'about'
    ]);
});

// Route untuk menampilkan halaman daftar semua post
Route::get('/posts', function () {
    // $posts = Post::with('author', 'category')->latest()->get(); // menggunakan eager loading untuk mengambil data post, author, dan category
    // $posts = Post::latest(); // Mengambil semua data post dari database

    return view('posts', [
        'title' => 'Blog Page',  // Mengirimkan data 'title' ke view 'posts'
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(3)->withQueryString()   // Mengambil semua post yang sudah difilter dan diurutkan berdasarkan tanggal terbaru dan dipaginate menjadi 3 data per halaman
    ]);
});

// Route untuk menampilkan halaman post tunggal berdasarkan slug
Route::get('/posts/{post:slug}', function (Post $post) { // Menggunakan model binding untuk mengambil post berdasarkan slug
    return view('post', [
        'title' => 'Single Post | '. $post->title,  // Mengirimkan data 'title' ke view 'post'
        'post' => $post  // Mengirimkan data post yang ditemukan ke view 'post'
    ]);
});

// Route untuk menampilkan daftar post yang ditulis oleh seorang author (user) berdasarkan username
Route::get('/authors/{user:username}', function (User $user) { // Menggunakan model binding untuk mengambil user berdasarkan username
    // $posts = $user->posts->load('category', 'author'); // menggunakan lazy eager loading untuk mengambil data post, category, dan author
    return view('posts', [
        'title' => count($user->posts).' Articles by: '. $user->name, // Menampilkan jumlah artikel yang ditulis oleh author
        'posts' => $user->posts  // Mengambil semua post yang ditulis oleh user dan mengirimkannya ke view 'posts'
    ]);
});

// Route untuk menampilkan daftar post yang termasuk dalam kategori tertentu berdasarkan slug
Route::get('/categories/{category:slug}', function (Category $category) { // Menggunakan model binding untuk mengambil kategori berdasarkan slug
    // $posts = $category->posts->load('category', 'author'); // menggunakan lazy eager loading untuk mengambil data post, category, dan author
    return view('posts', [
        'title' => 'Category Articles in: '. $category->name. '| include total: '. count($category->posts). ' articles', // Menampilkan nama kategori dan jumlah artikel dalam kategori tersebut
        'posts' => $category->posts  // Mengambil semua post yang termasuk dalam kategori ini dan mengirimkannya ke view 'posts'
    ]);
});

// Route untuk menampilkan daftar semua user
Route::get('/users', function () {
    return view('users', [
        'title' => 'Users Page',  // Mengirimkan data 'title' ke view 'users'
        'users' => User::all()    // Mengambil semua data user dari database dan mengirimkannya ke view 'users'
    ]);
});

// Route untuk menampilkan halaman kontak
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',  // Mengirimkan data 'title' ke view 'contact'
    ]);
});
