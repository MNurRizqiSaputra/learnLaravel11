<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //untuk menggunakan factory
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory; //untuk menggunakan factory
    protected $fillable = ['title', 'author', 'slug', 'body']; //untuk mengisi data

    // untuk mengambil data post berdasarkan author/relasi dengan user
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // untuk mengambil data post berdasarkan category/relasi dengan category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
