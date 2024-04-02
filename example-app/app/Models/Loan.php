<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'librarian_id',
        'customer_id',
        'book_id',
        'name',
        'copies_quantity',
        'loan_date',
        'return_date'
    ];
    
    public function librarian_id (){
        return $this->belongsTo(Librarian::class);
    }
    
    public function customer_id (){
        return $this->belongsTo(Customer::class);
    }

    public function book_id (){
        return $this->belongsTo(Book::class);
    }
}
