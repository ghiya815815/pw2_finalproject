<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Car::create([
        'id' => 1,
        'name' => 'Lamborghini',
        'photo' => 'lambo1.jpg',
        'type_id' => '6',
        'cost_per_day' => 5000000,
        'year' => 2024,
        'license_plate' => 'B 990 MUW',
    ]);

    Car::create([
        'id' => 2,
        'name' => 'Honda CRV',
        'photo' => '02m.jpg',
        'type_id' => '2',
        'cost_per_day' => 2000000,
        'year' => 2024,
        'license_plate' => 'B 754 UKL',
    ]);

    Car::create([
        'id' => 3,
        'name' => 'BMW',
        'photo' => '01m.jpg',
        'type_id' => '1',
        'cost_per_day' => 5000000,
        'year' => 2024,
        'license_plate' => 'B 087 KKV',
    ]);

    Car::create([
        'id' => 4,
        'name' => 'Toyota Alpard',
        'photo' => '03m.jpg',
        'type_id' => '4',
        'cost_per_day' => 3800000,
        'year' => 2024,
        'license_plate' => 'B 547 ZKI',
    ]);

    Car::create([
        'id' => 5,
        'name' => 'Toyota  Fortuner',
        'photo' => '04m.jpg',
        'type_id' => '4',
        'cost_per_day' => 1800000,
        'year' => 2024,
        'license_plate' => 'B 879 XIL',
    ]);

    Car::create([
        'id' => 6,
        'name' => 'Mercedes-Benz G63',
        'photo' => 'gwagon.jpg',
        'type_id' => '3',
        'cost_per_day' => 1800000,
        'year' => 2024,
        'license_plate' => 'B 879 XIL',
    ]);
    
}
}