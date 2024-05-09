<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Flavour;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            "priceRange" => "nullable|numeric",
            "categories" => "sometimes|array",
            "flavours" => "sometimes|array",
            "vendors" => "sometimes|array",
            "orderBy" => "in:newest,popular,discount,priceUp,priceDown",
        ]);

        // Minimum and maximum prices for the slider
        $minPrice = Stock::min("price_in_dollars");

        // Define the mapping from 'orderBy' values to SQL ordering expressions
        $orderMapping = [
            "popular" => ["sold_amount", "desc"],
            "newest" => ["created_at", "asc"],
            "discount" => ["discount_percentage", "desc"],
            "priceUp" => ["price_in_dollars", "asc"],
            "priceDown" => ["price_in_dollars", "desc"],
            "default" => ["created_at", "asc"],
        ];

        // Fetch filters from the request
        $priceTo = $request->input("priceRange");
        $categories = $request->input("categories", []);
        $flavours = $request->input("flavours", []);
        $brands = $request->input("vendors", []);
        $orderBy = $request->input("orderBy", "created_at"); // Default sort field
        $order = $orderMapping[$orderBy] ?? $orderMapping["default"];
        $searchQuery = $request->input("search");

        // Start the query on the Stock model
        $query = Stock::withProductDetails();

        // Conditional search query
        if ($searchQuery) {
            $query->whereHas("product", function ($q) use ($searchQuery) {
                $q->where("name", "ilike", "%{$searchQuery}%")
                    ->orWhere("main_description", "ilike", "%{$searchQuery}%")
                    ->orWhere("secondary_description", "ilike", "%{$searchQuery}%");
            });
        }

        // Apply price filter
        if ($priceTo !== null) {
            $query->whereBetween("price_in_dollars", [$minPrice, $priceTo]);
        }

        // Apply category filter if necessary
        if (!empty($categories)) {
            $query->whereHas("product", function ($q) use ($categories) {
                $q->whereIn("category", $categories);
            });
        }

        // Apply flavour filters if necessary
        if (!empty($flavours)) {
            $query->whereHas("flavour", function ($q) use ($flavours) {
                $q->whereIn("label", $flavours);
            });
        }

        // Apply brand filters if necessary
        if (!empty($brands)) {
            $query->whereHas("product", function ($q) use ($brands) {
                $q->whereIn("vendor", $brands);
            });
        }

        // Apply ordering
        $query->orderBy($order[0], $order[1]);

        // Execute the query
        $stocks = $query->paginate(12);

        // Minimum and maximum prices for the slider
        $maxPrice = Stock::max("price_in_dollars");
        $flavours = Flavour::all();
        $brands = Product::distinct()->pluck("vendor");
        $categories = Product::distinct()->pluck("category");

        return view("shop", [
            "data" => $stocks,
            "minPrice" => $minPrice,
            "maxPrice" => $maxPrice,
            "flavours" => $flavours,
            "brands" => $brands,
            "categories" => $categories,
        ]);
    }

    public function search(Request $request)
    {
        $validatedData = $request->validate([
            "search" => "nullable|string", // Validate optional search query
        ]);
        $searchQuery = $request->input("search");

        // Redirect with the search parameter to be handled by the index method
        return redirect()->route("shop", ["search" => $searchQuery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $stock_id, Request $request)
    {
        $size_id = $request->input("size", null);
        $stock_data = Stock::withProductDetails()->findOrFail($stock_id);

        if ($size_id) {
            $new_stock = Stock::where("product_id", "=", $stock_data->product_id)
                ->where("flavour_id", "=", $stock_data->flavour_id)
                ->where("size_id", "=", $size_id)
                ->first();
            return redirect()->route("product-detail", ["stock_id" => $new_stock->id]);
        }

        // Get all stocks related to the same product
        $related_stocks = Stock::with("flavour", "size")
            ->where("product_id", "=", $stock_data->product_id)
            ->get();

        // Get unique flavours
        $unique_flavours = $related_stocks->pluck("flavour")->unique("id");

        // Get unique sizes associated with the product and current flavour
        $unique_sizes = $stock_data->product
            ->stocks()
            ->where("flavour_id", $stock_data->flavour_id)
            ->with("size")
            ->get()
            ->pluck("size")
            ->unique("id");

        $next_stocks = [];

        foreach ($unique_flavours as $flavour) {
            // Find the first stock that matches this flavour and has a size
            $next_stock = $related_stocks->where("flavour_id", $flavour->id)->first();
            $next_stocks[$flavour->id] = $next_stock->id;
        }

        return view("product-detail", [
            "stock_data" => $stock_data,
            "flavours" => $unique_flavours,
            "sizes" => $unique_sizes,
            "next_stocks" => $next_stocks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
