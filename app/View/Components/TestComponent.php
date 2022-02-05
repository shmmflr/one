<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $name = ['ali', 'taghi', 'mamad'];
        return $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-component');
    }
}
