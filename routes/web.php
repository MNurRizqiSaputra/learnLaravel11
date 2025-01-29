<?php

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
        'posts' => [
            [
                'id' => 1,
                'slug' => 'artikel-1',
                'title' => 'Artikel 1',
                'author' => 'Putra',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt eros eu erat cursus, sit amet dictum urna fermentum. Quisque quis volutpat erat.'
            ],
            [
                'id' => 2,
                'slug' => 'artikel-2',
                'title' => 'Artikel 2',
                'author' => 'Saputra',
                'body' => 'Suspendisse potenti. Vivamus ut erat et felis vehicula ultricies. Ut ac ligula eget neque ultricies volutpat. Curabitur vitae magna ut leo blandit pretium.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Putra',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt eros eu erat cursus, sit amet dictum urna fermentum. Quisque quis volutpat erat.'
        ],
        [
            'id' => 2,
            'title' => 'Artikel 2',
            'slug' => 'artikel-2',
            'author' => 'Saputra',
            'body' => 'Suspendisse potenti. Vivamus ut erat et felis vehicula ultricies. Ut ac ligula eget neque ultricies volutpat. Curabitur vitae magna ut leo blandit pretium.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
    ]);
});
