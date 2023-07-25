<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;

class PopularProducts extends Component
{
    public function render()
    {
        $products = Products::inRandomOrder()
            ->take(4)
            ->get();

        return view('livewire.popular-products', [
            'products' => $products,
        ]);
    }
}
