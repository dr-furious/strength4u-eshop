<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ["product_id", "size_id", "flavour_id", "price_in_dollars", "discount_percentage", "stock_amount", "sold_amount"];

    public static function popular()
    {
        // Get the 12 most popular products
        return Stock::withProductDetails()->orderBy("sold_amount", "desc")->take(12)->get();
    }

    public static function bestSelling()
    {
        // Get the 12 products with greatest discount
        return Stock::withProductDetails()->orderBy("discount_percentage", "desc")->take(12)->get();
    }

    public static function allPopular()
    {
        return Stock::withProductDetails()->orderBy("sold_amount", "desc")->get();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function flavour()
    {
        return $this->belongsTo(Flavour::class, "flavour_id");
    }

    public function size()
    {
        return $this->belongsTo(Size::class, "size_id");
    }

    public function scopeWithProductDetails($query)
    {
        return $query->with([
            "product" => function ($query) {
                $query->with(["images"]);
                $query->withCount([
                    "flavours as flavour_count" => function ($subquery) {
                        $subquery->select(\DB::raw("count(distinct flavour_id)"));
                    },
                ]);
            },
            "flavour",
            "size",
        ]);
    }
}
