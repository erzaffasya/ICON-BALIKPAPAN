<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardPromodetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $promo;
    public function __construct($promo)
    {
        $this->promo = $promo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-promodetail');
    }
}
