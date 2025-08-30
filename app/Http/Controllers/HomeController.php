<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Service;
use App\Models\Sector;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_published', true)->where('is_featured', true)->orderBy('title')->limit(6)->get();
        $sectors = Sector::where('is_published', true)->where('is_featured', true)->orderBy('sort_order')->limit(4)->get();

        return view('home', compact('services', 'sectors'));
    }
}
