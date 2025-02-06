<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory; //untuk menggunakan factory

class Post extends Model
{
    use HasFactory; //untuk menggunakan factory
    protected $fillable = ['title', 'author', 'slug', 'body']; //untuk mengisi data

    // menggunaka eager loading by default
    protected $with = ['author', 'category'];

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

    // untuk mengambil data post berdasarkan filter
    public function scopeFilter(Builder $query, array $filters): void
    {
        // mengambil data post berdasarkan filter dengan mencari berdasarkan judul
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        // mengambil data post berdasarkan filter dengan mencari berdasarkan kategori
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );

        // mengambil data post berdasarkan filter dengan mencari berdasarkan author
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }
}
