<?php

namespace Database\Seeders;

use App\Models\Models;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Models::create([
            'merk_id' => '1',
            'name' => 'A1'
        ]);
        Models::create([
            'merk_id' => '1',
            'name' => 'A3'
        ]);
        Models::create([
            'merk_id' => '1',
            'name' => 'A4'
        ]);
        Models::create([
            'merk_id' => '1',
            'name' => 'A5'
        ]);

        Models::create([
            'merk_id' => '2',
            'name' => '135i'
        ]);
        Models::create([
            'merk_id' => '2',
            'name' => 'M2'
        ]);
        Models::create([
            'merk_id' => '2',
            'name' => 'M4'
        ]);

        Models::create([
            'merk_id' => '3',
            'name' => 'A45'
        ]);
        Models::create([
            'merk_id' => '3',
            'name' => 'C63'
        ]);
        Models::create([
            'merk_id' => '3',
            'name' => 'S63'
        ]);
    }
}
