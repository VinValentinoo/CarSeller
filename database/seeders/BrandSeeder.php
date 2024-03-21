<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Brand::create([
            'name' => 'Audi'
        ]);

        Brand::create([
            'name' => 'BMW'
        ]);

        Brand::create([
            'name' => 'Mercedes Benz'
        ]);
    }
}
