<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = 'book_genre';
    public function run(): void
    {
        $book = new Book();

        $book->author_id = "2";
        $book->name = "El Principito";

        $book->save();
    }
}
