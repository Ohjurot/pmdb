<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AutoSetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Try to set local base on current session
        if ($request->session()->has('locale'))
        {
            App::setLocale($request->session()->get('locale'));
        }
        // Else run auto detection based on browser
        else
        {
            // Get available locals and locals supported by the browser
            $app_locales = config('app.available_locales');
            $user_locales = $request->getLanguages();

            // Try to find first matching user local
            foreach ($user_locales as $user_locale )
            {
                if(array_key_exists($user_locale, $app_locales))
                {
                    App::setLocale($user_locale);
                    break;
                }
            }
        }

        return $next($request);
    }
}
