<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Each product has many stocks
    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_id');
    }

    // Optionally, define a relationship to get all unique flavours through stocks
    public function flavours()
    {
        return $this->hasManyThrough(
            Flavour::class,
            Stock::class,
            'product_id',   // Foreign key on the Stock table
            'id',           // Foreign key on the Flavour table
            'id',           // Local key on the Product table
            'flavour_id'    // Local key on the Stock table
        )->distinct();
    }

    // Optionally, define a relationship to get all unique sizes through stocks
    public function sizes()
    {
        return $this->hasManyThrough(
            Size::class,
            Stock::class,
            'product_id',
            'id',
            'id',
            'size_id'
        )->distinct();
    }

    public function getFlavourCount()
    {
        // This counts the unique flavours associated via stocks
        return $this->flavours()->distinct()->count('flavours.id');
    }
}
