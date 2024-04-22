<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();

        $customer->user_id = "2";
        $customer->phone_number = "999888777";
        $customer->email = "user1234@gmail.com";
        $customer->dni = "70435691";

        $customer->save();

        $customer2 = new Customer();

        $customer2->user_id = "4";
        $customer2->phone_number = "965124657";
        $customer2->email = "user17@gmail.com";
        $customer2->dni = "70567746";
        
        $customer2->save();
    }
}
