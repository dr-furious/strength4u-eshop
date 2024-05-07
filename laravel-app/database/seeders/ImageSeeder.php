<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 25; $i++) {
            Image::create([
                "product_id" => $i,
                "name" => "protein.png",
                "is_main" => true,
            ]);

            Image::create([
                "product_id" => $i,
                "name" => "protein_back.png",
                "is_main" => false,
            ]);

            Image::create([
                "product_id" => $i,
                "name" => "protein_upper.png",
                "is_main" => false,
            ]);
        }
    }
}
