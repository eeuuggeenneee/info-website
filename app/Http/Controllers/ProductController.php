<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Products::find($id);

        return view('shop.product-details', ['product' => $product]);
    }
}
