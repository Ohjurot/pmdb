<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class Item extends Component
{
    public $name;
    public $href;

    public $class_str = "nav-link";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $href)
    {
        // Save data
        $this->name = $name;
        $this->href = $href;

        // Split request part infos
        $full_path = request()->getPathInfo();
        if(strlen($full_path) > 0 && $full_path[0] == "/")
        {
            $full_path = substr($full_path, 1);
        }
        $path_parts = explode("/", $full_path);

        // Check if is active one
        if(strtolower($path_parts[0]) == strtolower($href))
        {
            $this->class_str .= " active";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.item');
    }
}
