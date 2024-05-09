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
            // Attempt to retrieve the Size, or create it if it does not exist
            $Size = Size::firstOrCreate(
                ['label' => $request->input("size$index")]
            );

            // Attempt to retrieve the Flavour, or create it if it does not exist
            $Flavour = Flavour::firstOrCreate(
                ['label' => $request->input("flavour$index")]
            );

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
        $product_stock = Stock::Allpopular()->where('product_id', $product_id);
        return view('admin.show', ['product_stock' => $product_stock]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $product_id)
    {
        $flavours = Flavour::all()->pluck('label');
        $sizes = Size::all()->pluck('label');

        $vendors = Product::distinct()->pluck('vendor');
        $categories = Product::distinct()->pluck('category');
        $product_stock = Stock::Allpopular()->where('product_id', $product_id);
        $stockCount = $product_stock->count();
        return view('admin.edit', [
            'product_stock' => $product_stock,
            'stockCount' => $stockCount,
            'flavours' => $flavours,
            'sizes' => $sizes,
            'vendors' => $vendors,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $product_id)
    {
        //validate just product data
        $request->validate([
            'title' => 'required|min:3|max:50',
            'desc' => 'required|min:3|max:600',
            'secondary_desc' => 'required|min:3|max:600',
            'category' => 'required',
            'vendor' => 'required',
        ]);
        $product = Product::where('id', $product_id)->firstOrFail();
        //update just product
        $product->name = request('title');
        $product->main_description = request('desc');
        $product->secondary_description = request('secondary_desc');
        $product->category = request('category');
        $product->vendor = request('vendor');
        $product->save();

        //first update all old ones
        $product_stock = Stock::where('product_id', $product_id)->orderBy("sold_amount", "desc")->get();
        $stockCount = $product_stock->count();
        for ($i = 1; $i <= $stockCount; $i++) {
            $discountKey = "discount$i";
            $stock_update = $product_stock->skip($i - 1)->first();
            if ($request->has($discountKey)) {
                // get new flavour and size id
                $flavour_id_new = Flavour::firstOrCreate(['label' => $request->input("flavour$i")]);
                $size_id_new = Size::firstOrCreate(['label' => $request->input("size$i")]);

                // get stock record that is in updated request
                if (($flavour_id_new->id != $stock_update->flavour_id) || ($size_id_new->id != $stock_update->size_id)) {
                    $stock_update->size_id = $size_id_new->id;
                    $stock_update->flavour_id = $flavour_id_new->id;
                }
                $stock_update->price_in_dollars = $request->input("price$i");
                $stock_update->discount_percentage = $request->input("discount$i");
                $stock_update->stock_amount = $request->input("amount$i");

                $stock_update->save();
            } else {
                $stock_update->delete();
            }
        }
        //Todo:Adam update rest
        return ($stock_update);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
