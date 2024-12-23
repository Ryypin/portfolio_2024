<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $text;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary', $text = 'Click Me', $link = '')
    {
        $this->type = $type;
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
