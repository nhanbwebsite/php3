<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestDatGa extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dat;
    public function __construct($dat)
    {
        $this -> $dat = $dat;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-dat-ga');
    }
}
