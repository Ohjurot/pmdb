<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class ThemeSelector extends Component
{
    // Members
    public $current_theme_name = "";
    public $current_theme_text = "";
    public $themes_available = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Resolve themes
        $this->themes_available = config('pmdb.available_themes');

        // Resolve current theme name
        $this->current_theme_name = config('pmdb.default_theme');
        if(Session::has('theme'))
        {
            $theme_name = Session::get('theme');
            if(array_key_exists($theme_name, $this->themes_available))
            {
                $this->current_theme_name = $theme_name;
            }
        }

        // Resolve current theme text
        $this->current_theme_text = $this->themes_available[$this->current_theme_name];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.theme-selector');
    }
}
