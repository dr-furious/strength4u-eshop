<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
				/**
					* Run the database seeds.
					*/
				public function run(): void
				{
								for ($i = 0; $i < 200; $i++) {
												Stock::factory()->create();
								}
				}
}
