<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author_id',
        'name',
    ];

    public function author (){
        return $this->belongsTo(author::class);
    }

    public function genres (){
        return $this->belongsToMany(genre::class);
    }

    /**
     * Poner los Modelos con Mayúsculas
     * Especificar las relaciones en los modelos con belongsTo, belongsToMany y hasMany
     * Leer documentación de nombres de laravel
     * La relación de copies con copy_status está al revés
     */
}
