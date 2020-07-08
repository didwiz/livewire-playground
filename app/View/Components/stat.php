<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stat extends Component
{
    public $title;
    public $value;
    public $percent;
    public $increase;
    public $icon;


    /**
     * Undocumented function
     *
     * @param string $title
     * @param string $value
     * @return void
     */
    public function __construct($title, $value, $percent, $icon = 'users', $increase = true)
    {
        $this->title = $title;
        $this->value = $value;
        $this->icon = $icon;
        $this->percent = $percent;
        $this->increase = $increase;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.stat');
    }
}
