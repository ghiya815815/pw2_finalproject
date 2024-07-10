<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
        User::create([
            'id' => 1,
            'name' => 'Bryan',
            'password' => 'br230',
            'email' => 'bryn0@gmail.com',
        ]);

        User::create([
            'id' => 2,
            'name' => 'Laura',
            'password' => 'lr589',
            'email' => 'lauraaw99@gmail.com',
        ]);

        User::create([
            'id' => 3,
            'name' => 'Bella',
            'password' => 'bel90',
            'email' => 'hadidbela@gmail.com',
        ]);

        User::create([
            'id' => 4,
            'name' => 'Zayn',
            'password' => 'zyn90',
            'email' => 'zaynnn@gmail.com',
        ]);

        User::create([
            'id' => 5,
            'name' => 'Azzam',
            'password' => 'Azz87',
            'email' => 'azamine8@gmail.com',
        ]);
}
}