<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Flavour;
use App\Models\Product;
use App\Models\Stock;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $product_id)
    {
        $product = Product::findOrFail($product_id);

        // Fetch sizes in stock for the specified product
        $sizesInStock = Stock::where('product_id', $product_id)
            ->distinct('size_id')
            ->pluck('size_id');

        $flavours = Flavour::all();

        return view('product-detail', [
            'product' => $product,
            'sizesInStock' => $sizesInStock,
            'flavours' => $flavours
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
