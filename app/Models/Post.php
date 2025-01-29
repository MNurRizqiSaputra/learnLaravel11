<?php

namespace App\Models;
use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        // mengunakan callback function
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] === $slug;
        // });


        // mengunakan arrow function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

        // jika post tidak ada
        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
