<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardProduct extends Component
{
    public $product; //declaration  d'un produit 
    /**
     * Create a new component instance.
     */
    public function __construct($product)
    {
        $this->product = $product; //initialisation du produit
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
