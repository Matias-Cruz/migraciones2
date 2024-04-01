<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author_id',
        'name',
    ];

    public function author (){
        return $this->belongsTo(Author::class);
    }

    public function genres (){
        return $this->belongsToMany(Genre::class);
    }

    public function copies (){
        return $this->hasMany(Copy::class);
    }
    
}
