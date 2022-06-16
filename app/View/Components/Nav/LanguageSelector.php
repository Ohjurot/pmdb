<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

class LanguageSelector extends Component
{
    public $current_lang_symbol;
    public $langs_available = array();

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Current
        $this->current_lang_symbol = App::getLocale();
        if($this->current_lang_symbol == "en")
        {
            $this->current_lang_symbol = "gb";
        }

        // Available
        $this->langs_available = config('app.available_locales');
        foreach($this->langs_available as $k => $v)
        {
            if($v[0] == "en")
            {
                $this->langs_available[$k][0] = "gb";
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.language-selector');
    }
}
