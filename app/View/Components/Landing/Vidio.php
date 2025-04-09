<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class Vidio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $vidio;
    public function __construct($vidio)
    {
        $this->vidio = $vidio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.vidio');
    }
}
