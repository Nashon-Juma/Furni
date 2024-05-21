<?php

namespace App\Livewire;

use Livewire\Component;

class ProductShow extends Component
{
    public $productId;
    public function mount( )
    {
    }
    public function getProductProperly(){
        return \App\Models\Product::findOrFail($this->productId);
    }
    public function render()
    {
        return view('livewire.product-show', [
            'product' => $this->productId
        ]);
    }
}
