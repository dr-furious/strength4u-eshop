<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Flavour;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minPrice = Stock::min("price_in_dollars");
        $maxPrice = Stock::max("price_in_dollars");
        $flavours = Flavour::all();
        $brands = Product::distinct()->get("vendor");

        return view("shop", [
            "data" => [],
            "minPrice" => $minPrice,
            "maxPrice" => $maxPrice, 
            "flavours" => $flavours,
            "brands" => $brands,
        ]);
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
    public function show(int $stock_id)
    {
        $stock_data = Stock::withProductDetails()->findOrFail($stock_id);
        $product_data = Product::with(['sizes', 'flavours'])->findOrFail($stock_data->product_id);
        Log::info($product_data);
        return view('product-detail',[
            'stock_data' => $stock_data,
            'product_data' => $product_data]
        );
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
