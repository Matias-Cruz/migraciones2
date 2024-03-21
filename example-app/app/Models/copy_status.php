<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class copy_status extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "copy_status";
    
    protected $fillable = [
        'copies_id',
        'status',
    ];
}
