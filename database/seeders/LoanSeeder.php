<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'car_id' => 1,
            'user' => '1',
            'loan_date' => '2024-12-10',
            'return_date' => '2024-12-10',
            'total_cost' => 10000000,
            'status' => 'borrowed',
        ]);

        Loan::create([
            'car_id' => 2,
            'user' => '2',
            'loan_date' => '2024-12-10',
            'return_date' => '2024-12-10',
            'total_cost' => 4000000,
            'status' => 'borrowed',
        ]);

        Loan::create([
            'car_id' => 3,
            'user' => '3',
            'loan_date' => '2024-12-10',
            'return_date' => '2024-12-10',
            'total_cost' => 5000000,
            'status' => 'returned',
        ]);

        Loan::create([
            'car_id' => 4,
            'user' => '4',
            'loan_date' => '2024-12-10',
            'return_date' => '2024-12-10',
            'total_cost' => 7600000,
            'status' => 'borrowed',
        ]);

        Loan::create([
            'car_id' => 5,
            'user' => '5',
            'loan_date' => '2024-12-10',
            'return_date' => '2024-12-10',
            'total_cost' => 1800000,
            'status' => 'borrowed',
        ]);
    }
}