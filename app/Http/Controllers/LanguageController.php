<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Dil değiştir
     */
    public function switch($locale)
    {
        // Desteklenen dilleri kontrol et
        $supportedLocales = ['tr', 'en'];
        
        if (!in_array($locale, $supportedLocales)) {
            abort(400, 'Unsupported language');
        }
        
        // Session'a dil ayarını kaydet
        Session::put('locale', $locale);
        
        // Önceki sayfaya geri dön
        return redirect()->back();
    }
}
