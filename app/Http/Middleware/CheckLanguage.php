<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('language')){
            $languageSession = Session::get('language');
            if(App::getLocale() !== $languageSession) {
                App::setlocale($languageSession);
            
            } else {
                Session::put('language', 'es');
                App::setLocale('es');
            }
        }

        return $next($request);
    }
}
