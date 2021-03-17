<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class TestComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $profile;
    public $href;
    public $container;

    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $this->getProfile();
        return view('components.test-component');
    }

    public function getProfile()
    {
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $this->profile = $user->profile;

    }
}
