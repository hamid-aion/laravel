<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('invoices')->insert([
            [
                'customer_name' => 'John Doe',
                'customer_email' => 'john.doe@example.com',
                'amount' => 150.00,
                'invoice_date' => '2023-07-01',
                'status' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_name' => 'Jane Smith',
                'customer_email' => 'jane.smith@example.com',
                'amount' => 250.00,
                'invoice_date' => '2023-07-02',
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_name' => 'Bob Johnson',
                'customer_email' => 'bob.johnson@example.com',
                'amount' => 350.00,
                'invoice_date' => '2023-07-03',
                'status' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
