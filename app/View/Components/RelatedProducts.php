<?php

namespace App\View\Components;

use App\Models\Categorie;
use Illuminate\View\Component;

class RelatedProducts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categorie_id;

    public function __construct($categorieID)
    {
        $this->categorie_id = $categorieID;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categorie = Categorie::find($this->categorie_id);
        $products = $categorie->products();
        return view('components.related-products')->with("products", $products);
    }
}
