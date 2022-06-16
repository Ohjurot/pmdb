<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionModify extends Controller
{
    // Set the language for a user
    public function SetLanguage(Request $request)
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

        // Resolve redirection url
        $target_url = '';
        if($request->has('redirect'))
        {
            $target_url = $request->input('redirect');
        }

        // Redirect
        return redirect(url($target_url));
    }
}
