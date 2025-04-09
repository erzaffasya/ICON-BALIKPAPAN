<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardAddons extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $addons;

    public function __construct( $addons)
    {
        $this->addons = $addons;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-addons');
    }
}
