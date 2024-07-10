<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's datab,
     *ase.
     */
    public function run(): void
    {

        $this->call([
            LoanSeeder::class,
            CarSeeder::class,
            TypeSeeder::class
            
        ]);  
    }
}
