<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Size;
use App\Models\Flavour;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
				// Static counter to keep track of instance count
				private static $instanceCounter = 0;

				/**
					* Define the model's default state.
					*
					* @return array<string, mixed>
					*/
				public function definition(): array
				{
								// Get all existing product, size, and flavour IDs
								$productIds = Product::pluck("id")->toArray();
								$sizeIds = Size::pluck("id")->toArray();
								$flavourIds = Flavour::pluck("id")->toArray();

								// Increment instance counter
								self::$instanceCounter++;

								// Set the maximum number of retries
								$maxRetries = 1000;
								$retryCount = 0;
								$combinationExists = false;

								do {
												$productId = fake()->randomElement($productIds);
												$sizeId = fake()->randomElement($sizeIds);
												$flavourId = fake()->randomElement($flavourIds);

												// Check if the combination already exists
												$combinationExists = DB::table("stocks")->where("product_id", $productId)->where("size_id", $sizeId)->where("flavour_id", $flavourId)->exists();

												// Increment the retry count
												$retryCount++;

												// Throw an error if maximum retries reached
												if ($retryCount >= $maxRetries) {
																throw new \Exception("Maximum number of retries reached.");
												}
								} while ($combinationExists);

								// Determine the discount percentage
								$discountPercentage = 0; // Default to no discount
								if (self::$instanceCounter % 3 == 0) {
												// Apply discount only for every third element
												$discountPercentage = fake()->numberBetween(1, 50); // 1 to 50% discount
								}

								return [
												"product_id" => $productId,
												"size_id" => $sizeId,
												"flavour_id" => $flavourId,
												"price_in_dollars" => fake()->randomFloat(2, 1, 100),
												"discount_percentage" => $discountPercentage,
												"stock_amount" => fake()->numberBetween(0, 1000),
												"sold_amount" => fake()->numberBetween(0, 100),
								];
				}
}
