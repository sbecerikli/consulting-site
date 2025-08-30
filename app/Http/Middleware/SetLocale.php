<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
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
        // Session'dan dil ayarını al
        $locale = Session::get('locale', config('app.locale'));
        
        // Desteklenen dilleri kontrol et
        $supportedLocales = ['tr', 'en'];
        if (!in_array($locale, $supportedLocales)) {
            $locale = config('app.locale');
        }
        
        // Uygulama dilini ayarla
        App::setLocale($locale);
        
        return $next($request);
    }
}
