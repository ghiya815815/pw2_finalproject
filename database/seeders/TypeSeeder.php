<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * 1.0
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
        
        Type::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary Type that is brought to life through performance.',
        ]);
    
        Type::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other Types such as slice of life, action, comedy, and especially romance.',
        ]);

        Type::create([
            'name' => 'Actions',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);
    }
}
