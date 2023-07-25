<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;

class LowestPrice extends Component
{
    public function render()
    {
        $products = Products::orderBy('price', 'asc')
            ->take(4)
            ->get();

        return view('livewire.lowest-price', [
            'products' => $products,
        ]);
    }
}
