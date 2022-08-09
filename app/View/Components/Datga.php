<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datga extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mess;
    public $type;
    public function __construct( $mess, $type)
    {
        $this->mess = $mess;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datga');
    }
}
