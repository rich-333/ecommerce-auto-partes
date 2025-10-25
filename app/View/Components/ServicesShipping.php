<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesShipping extends Component
{
    public $icon;
    public $title;
    public $description;

    public function __construct($icon, $title, $description)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.services-shipping');
    }
}
