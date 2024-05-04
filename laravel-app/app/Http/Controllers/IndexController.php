<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $popularProducts = Stock::popular();
        $bestSellingProducts = Stock::bestSelling();
        return view('index', [
            'popularProducts' => $popularProducts,
            'bestSellingProducts' => $bestSellingProducts
        ]);
    }
}
