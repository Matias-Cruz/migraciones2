<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name' => 'Biografía'],
            ['name' => 'Historia'],
            ['name' => 'Cuento'],
        ];

        foreach ($genres as $genre) {
            genre::create([
                'name' => $genre['name'],
            ]);
        }
    }
}
