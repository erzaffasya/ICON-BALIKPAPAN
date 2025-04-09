<?php

namespace App\View\Components;

use Illuminate\View\Component;
use PhpParser\Node\Expr\Cast\Object_;

class CardPromo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $promo;

    public function __construct( $promo )
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
        return view('components.card-promo');
    }
}
