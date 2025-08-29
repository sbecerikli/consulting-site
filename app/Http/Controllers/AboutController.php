<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

class AboutController extends Controller
{
    public function __invoke()
    {
        $team = TeamMember::query()->where('is_active', true)->orderBy('display_order')->get();
        return view('about', compact('team'));
    }
}
