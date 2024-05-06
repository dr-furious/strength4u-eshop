<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    // Stock belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Stock belongs to a Flavour
    public function flavour()
    {
        return $this->belongsTo(Flavour::class, 'flavour_id');
    }

    // Stock belongs to a Size
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function scopeWithProductDetails($query)
    {
        return $query->with([
        'product' => function ($query) {
            // Using a raw SQL query to correctly handle distinct count
            $query->withCount(['flavours as flavour_count' => function ($subquery) {
                $subquery->select(\DB::raw('COUNT(DISTINCT flavour_id)'));
            }]);
        },
        'flavour',  // Eager load the entire flavour
        'size'      // Eager load the entire size
    ]);
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
