<?php

namespace Database\Seeders;

use App\Models\CopyStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CopyStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = new CopyStatus();

        $status->id = "1";
        $status->name = "Available";

        $status->save();
    }
}
