<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class books_genre extends Model
{
    // protected $table = "books_genres";
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'book_id',
        'genre_id',
    ];
}
