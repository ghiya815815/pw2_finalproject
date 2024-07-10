<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'SUV ',
            'description' => 'One of the easiest ways to identify an SUV is by its shape. SUVs are typically designed with more rugged edges and a box-like appearance compared to sedans.',
        ]);

        Type::create([
            'name' => 'CRV',
            'description' => 'The acronym “CRV” stands for “Comfortable Runabout Vehicle,” emphasizing its versatility for everyday use It features a 1993 cc engine with CVT and E-CVT transmissions. The CR-V is a 7-seater SUV with a length of 4691 mm, width 1866 mm, wheelbase 2701 mm, and ground clearance of 198 mm.'
        ]);

        Type::create([
            'name' => 'Off Road ',
            'description' => '"Off-road vehicles” is the term commonly used for vehicles like Jeeps and other adventure cars that have a 4WD (four-wheel drive) system or are 4x4. They are called “off-road” because their capabilities are typically used in challenging terrain situations.',
        ]);

        Type::create([
            'name' => 'Toyota Alpard',
            'description' => 'The Toyota Alphard in Indonesia comes with petrol engines in 3 variants. It has a 2498 cc engine and CVT transmission options. The Alphard is a 6-seater MPV with dimensions of 5010 mm length, 1850 mm width, and 3000 mm wheelbase.',
        ]);

        Type::create([
            'name' => 'Toyota Fortuner',
            'description' => 'The Toyota Fortuner in Indonesia is available with 5 Diesel and 1 Gasoline engine options in 6 variants. It offers Diesel engines with capacities of 2694 cc and Petrol engines with 2755 cc capacity. The Fortuner is a 7-seater SUV with dimensions of 4795 mm length, 1855 mm width, and 2745 mm wheelbase.',
        ]);

        Type::create([
            'name' => 'Sport',
            'description' => 'A sports car is an amazing type of car thats designed for high performance. Sports cars usually have aerodynamic designs, powerful engines, and sturdy suspensions. And their also usually equipped with features that make the car more stable and safe when used at high speeds!',
        ]);

    }
}