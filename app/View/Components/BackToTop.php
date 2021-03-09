<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackToTop extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <a href="#"/>
    <button type="button" class="fixed bottom-3 left-1/2 border-white w-10 h-10 rounded-md bg-red hover:bg-red-light ">
    <img class="object-contain" src="{{ asset('storage/img/backToTop.png') }}" alt="BackToTop"/></button>
    </a>    
</div>
blade;
    }
}
