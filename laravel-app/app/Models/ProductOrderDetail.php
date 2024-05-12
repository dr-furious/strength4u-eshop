<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrderDetail extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["order_id", "product_id", "flavour_id", "size_id", "discount_percentage", "price_in_dollars", "quantity"];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function flavour()
    {
        return $this->belongsTo(Flavour::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
