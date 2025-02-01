<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //untuk menggunakan factory

class Post extends Model
{
    use HasFactory; //untuk menggunakan factory
    protected $fillable = ['title', 'author', 'slug', 'body']; //untuk mengisi data
}
