<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;

    public $sort = 'latest'; 

    public $search = ''; 
    public function updatingSort()

    {
        $this->resetPage();
    }

    public function render()
    {
  
        $query = Products::query();

    
        if ($this->search !== '') {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

      
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
