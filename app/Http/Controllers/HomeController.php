<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\CaseStudy;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::query()->where('is_published', true)->orderBy('title')->limit(6)->get();
        $posts = BlogPost::query()->where('is_published', true)->orderByDesc('published_at')->limit(3)->get();
        $caseStudies = CaseStudy::query()->where('is_published', true)->orderByDesc('published_at')->limit(3)->get();
        $testimonials = Testimonial::query()->where('is_published', true)->orderByDesc('created_at')->limit(6)->get();

        return view('home', compact('services', 'posts', 'caseStudies', 'testimonials'));
    }
}
