<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;

    public $sort = 'latest'; // This will be bound to the select input

    public $search = ''; // This will be bound to the search input
    public function updatingSort()

    {
        $this->resetPage();
    }

    public function render()
    {
        // Create the base query
        $query = Products::query();

        // Apply search
        if ($this->search !== '') {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Apply sorting
        switch ($this->sort) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        // Paginate the results
        $products = $query->paginate(9);

        return view('livewire.products-table', [
            'products' => $products,
        ]);
    }
    public function gotoPage($page)
    {

        $this->setPage($page);
    }
}
