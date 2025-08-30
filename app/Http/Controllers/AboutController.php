<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\TeamMember;
use App\Models\Service;
use App\Models\Sector;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutContent = AboutPage::getContent();
        $teamMembers = TeamMember::where('is_published', true)->orderBy('sort_order')->get();
        $services = Service::where('is_published', true)->orderBy('title')->limit(6)->get();
        $sectors = Sector::where('is_published', true)->orderBy('sort_order')->limit(4)->get();

        return view('about', compact('aboutContent', 'teamMembers', 'services', 'sectors'));
    }
}
