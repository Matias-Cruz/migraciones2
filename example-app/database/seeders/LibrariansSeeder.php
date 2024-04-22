<?php

namespace Database\Seeders;

use App\Models\Librarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrariansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $librarian = new Librarian();

        $librarian->user_id = "1";
        $librarian->cv_id = "1";

        $librarian->save();

        $librarian2 = new Librarian();

        $librarian2->user_id = "2";
        $librarian2->cv_id = "3";
        
        $librarian2->save();
    }
}
