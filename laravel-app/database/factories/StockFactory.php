<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Size;
use App\Models\Flavour;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Queue\Console\RetryCommand;

class StockFactory extends Factory
{
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

        // Set the maximum number of retries
        $maxRetries = 1000;
        $retryCount = 0;
        $combinationExists = false;

        do {
            $productId = fake()->randomElement($productIds);
            $sizeId = fake()->randomElement($sizeIds);
            $flavourId = fake()->randomElement($flavourIds);

            // Check if the combination already exists
            $combinationExists = DB::table("stocks")->where("product_id", $productId)
                ->where("size_id", $sizeId)
                ->where("flavour_id", $flavourId)
                ->exists();

            // Increment the retry count
            $retryCount++;

            // Throw an error if maximum retries reached
            if ($retryCount >= $maxRetries) {
                throw new \Exception("Maximum number of retries reached.");
            }
        } while ($combinationExists);

        return [
            "product_id" => $productId,
            "size_id" => $sizeId,
            "flavour_id" => $flavourId,
            "price_in_dollars" => $this->faker->randomFloat(2, 1, 100),
            "discount_percentage" => $this->faker->numberBetween(0, 50),
            "stock_amount" => $this->faker->numberBetween(0, 10_000),
            "sold_amount" => 0,
        ];
    }
}



