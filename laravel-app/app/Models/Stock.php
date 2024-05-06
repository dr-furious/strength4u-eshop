<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function scopeWithProductDetails($query)
    {
        return $query->join("products", "stocks.product_id", "=", "products.id")
                    ->join("flavours", "stocks.flavour_id", "=", "flavours.id")
                    ->join("sizes", "stocks.size_id", "=", "sizes.id")
                    ->select(
                        'stocks.*', // Select all columns from stocks table
                        'products.*', // Potentially specify only needed columns
                        'flavours.label as flavour_label', // Alias the label column from flavours
                        'sizes.label as size_label' // Alias the label column from sizes
                    );
    } 


    public static function popular()
    {
        // Get the 12 most popular products
        return Stock::withProductDetails()
        ->orderBy('sold_amount', 'desc')
        ->take(12)->get();
    }

    public static function bestSelling()
    {
        // Get the 12 products with greatest discount
        return Stock::withProductDetails()
        ->orderBy('discount_percentage', 'desc')
        ->take(12)->get();
    }
}
