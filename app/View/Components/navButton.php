<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navButton extends Component
{
    public bool $opened = false;
    public string $btnText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($opened, $btnText)
    {
        
        $this->opened = $opened;
        $this->btnText = $btnText;

    }

    public function openModal($opened) 
    {
        if(!$opened) {
            $opened = true;
        }
        echo $opened;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
    <button {{ openModal() }}> {{ $btnText }} </button>
    blade;
    }
}
