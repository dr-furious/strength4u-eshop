<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
	* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
	*/
class ProductFactory extends Factory
{
				/**
					* Define the model's default state.
					*
					* @return array<string, mixed>
					*/
				public function definition(): array
				{
								return [
												"name" => fake()
																->unique()
																->randomElement(["Protein", "Creatine", "Vitamins", "Protein xxl", "Creatine xxl", "Vitamins xxl", "Mega Protein", "Mega Creatine", "Mega Vitamins", "Ultra Protein", "Ultra Creatine", "Ultra Vitamins", "Protein Bomb", "Creatin Bomb", "Vitamins Bomb", "Strongest Protein xxl", "Strongest Creatine xxl", "Strongest Vitamins xxl", "Strongest Mega Protein", "Strongest Mega Creatine", "Strongest Mega Vitamins", "Strongest Ultra Protein", "Strongest Ultra Creatine", "Strongest Ultra Vitamins", "Super Duper AA"]),
												"vendor" => fake()->randomElement(["PROtein", "7 Strong Brothers", "Creapure", "Furious", "G8test", "Green Force", "Thunderstorm", "Power Genie"]),
												"category" => fake()->randomElement(["proteins", "amino acids", "vitamins", "minerals", "healthy food"]),
												"main_description" => fake()->text(600),
												"secondary_description" => fake()->text(600),
								];
				}
}
