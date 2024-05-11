<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
	* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Size>
	*/
class SizeFactory extends Factory
{
				/**
					* Define the model's default state.
					*
					* @return array<string, mixed>
					*/
				public function definition(): array
				{
								return [
												"label" => fake()
																->unique()
																->randomElement(["100g", "200g", "500g", "1000g", "2000g"]),
								];
				}
}
