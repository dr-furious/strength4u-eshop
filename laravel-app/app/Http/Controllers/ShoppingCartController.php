<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class ShoppingCartController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cartData = json_decode($request->input("cart", "[]"), true); // Decode JSON string to array
        if ($cartData == null) {
            return view("cart", ["data" => []]);
        }
        $rules = [
            "*" => "required|array", // Ensure each item is an array
            "*.stockId" => "required|integer|min:1", // Validate stockId as unsigned integer
            "*.quantity" => "required|integer|min:1", // Validate quantity as unsigned integer
        ];
        $validator = \Validator::make($cartData, $rules);
        if ($validator->fails()) {
            // If validation fails, return a response with the errors
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $data = [];
        foreach ($cartData as $item) {
            $stock = Stock::withProductDetails()->find($item["stockId"]);

            // Skip this iteration if no stock is found
            if (!$stock) {
                continue; // Move to the next iteration of the loop
            }

            $data[] = [
                "stock" => $stock,
                "quantity" => $item["quantity"],
            ];
        }

        //return $data;
        return view("cart", ["data" => $data, "errors" => []]);
    }
}
