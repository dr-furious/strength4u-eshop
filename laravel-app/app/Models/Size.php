<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ["label"];

    // Each size can be associated with many stocks
    public function stocks()
    {
        return $this->hasMany(Stock::class, "size_id");
    }

    public function orderProductDetails()
    {
        return $this->hasMany(OrderProductDetail::class);
    }
}
