<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    use HasFactory;

    // Each flavour can be associated with many stocks
    public function stocks()
    {
        return $this->hasMany(Stock::class, 'flavour_id');
    }
}
