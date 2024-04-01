<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CopyStatus extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'status'
    ];

    public function copies (){
        return $this->belongsToMany(Copy::class);
    }
}
