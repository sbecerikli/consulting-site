<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    public function index()
    {
        $sectors = Sector::where('is_published', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('sectors.index', compact('sectors'));
    }
}
