<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Flavour;
use App\Models\Product;
use App\Models\Size;
use App\Models\Stock;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allProducts = Stock::allPopular();
        return view('admin.index', [
            'allProducts' => $allProducts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:50',
            'desc' => 'required|min:3|max:600',
            'secondary_desc' => 'required|min:3|max:600',
            'category' => 'required',
            'vendor' => 'required',
        ]);

        // Create the main product entry
        $Product = Product::create([
            'name' => $request->title,
            'main_description' => $request->desc,
            'secondary_description' => $request->secondary_desc,
            'category' => $request->category,
            'vendor' => $request->vendor
        ]);

        // Initialize an index for dynamic field grouping
        $index = 1;
        while ($request->has("flavour$index")) {
            $Size = Size::where('label', 'ilike', $request->input("size$index"))->first();
            $Flavour = Flavour::where('label', 'ilike', $request->input("flavour$index"))->first();

            // Check if the size and flavour were found, if not, skip this iteration
            if ($Size && $Flavour) {
                Stock::create([
                    'product_id' => $Product->id,
                    'size_id' => $Size->id,
                    'flavour_id' => $Flavour->id,
                    'price_in_dollars' => $request->input("price$index"),
                    'discount_percentage' => $request->input("discount$index"),
                    'stock_amount' => $request->input("amount$index"),
                    'sold_amount' => 0
                ]);
            }

            // Increment the index for the next group of inputs
            $index++;
        }

        return redirect('/admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flavours = Flavour::all()->pluck('label');
        $sizes = Size::all()->pluck('label');

        $vendors = Product::distinct()->pluck('vendor');
        $categories = Product::distinct()->pluck('category');

        return view('admin.create', [
            'flavours' => $flavours,
            'sizes' => $sizes,
            'vendors' => $vendors,
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $product_id)
    {
        $product = Product::where('id', $product_id)->firstOrFail();
        return view('admin.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return ($product);
        return view('admin.edit', ['product' => $product]);
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
