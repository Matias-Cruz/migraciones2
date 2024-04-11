<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Librarian extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "user_id",
        "cv_id"
    ];

    public function user (){
        return $this->hasOne(User::class);
    }
}
