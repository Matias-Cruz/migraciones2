<?php

namespace Database\Seeders;

use App\Models\BookGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = 'books_genres';
    
    public function run(): void
    {
        $book_genre = new BookGenre();

        $book_genre->genre_id = "5";
        $book_genre->book_id = "1";

        $book_genre->save();
    }
}
