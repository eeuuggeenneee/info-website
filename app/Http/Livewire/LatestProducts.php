<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
class LatestProducts extends Component
{
    public function render()
    {
        $products = Products::latest()->take(6)->get();

        return view('livewire.latest-products', [
            'products' => $products,
        ]);
    }
}
