<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionModify extends Controller
{
    // Redirection helper
    private function redirectByRequest(Request $request)
    {
        // Resolve redirection url
        $target_url = '';
        if($request->has('redirect'))
        {
            $target_url = $request->input('redirect');
        }

        // Redirect
        return redirect(url($target_url));
    }

    // Set the language for a user
    public function setLanguage(Request $request)
    {
        // Reset session language
        if($request->has('reset'))
        {
            // Delete language
            $request->session()->forget('locale');
        }
        else if($request->has('language'))
        {
            $lang = $request->input('language');
            if(array_key_exists($lang, config('app.available_locales')))
            {
                $request->session()->put('locale', $lang);
            }
        }

        // Redirect to original url
        return $this->redirectByRequest($request);
    }

    // Set the theme for a user
    public function setTheme(Request $request)
    {
        if($request->has('theme'))
        {
            $theme = $request->input('theme');
            if(array_key_exists($theme, config('pmdb.available_themes')))
            {
                $request->session()->put('theme', $theme);
            }
        }

        // Redirect to original url
        return $this->redirectByRequest($request);
    }
}
