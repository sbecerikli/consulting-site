<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::query()->where('is_published', true)->orderBy('title')->paginate(12);
        return view('services.index', compact('services'));
    }

    public function show(string $slug)
    {
        $service = Service::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('services.show', compact('service'));
    }
}
