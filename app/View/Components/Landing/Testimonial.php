<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;
use PhpParser\Node\Expr\Cast\Object_;

class Testimonial extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $testimoni;
    public function __construct($testimoni)
    {
        $this->testimoni = $testimoni;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.testimonial');
    }
}
