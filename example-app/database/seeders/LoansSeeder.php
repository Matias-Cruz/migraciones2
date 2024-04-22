<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loan = new Loan();

        $loan->librarian_id = "1";
        $loan->customer_id = "2";
        $loan->book_id = "1";
        $loan->copies_quantity = "10";
        $loan->loan_date = "2024-02-10";
        $loan->return_date = "2024-04-10";

        $loan->save();
        
        $loan2 = new Loan();

        $loan2->librarian_id = "1";
        $loan2->customer_id = "1";
        $loan2->book_id = "1";
        $loan2->copies_quantity = "20";
        $loan2->loan_date = "2024-03-15";
        $loan2->return_date = "2024-04-15";

        $loan2->save();
    }
}
