<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::query()->with(['images'])->where('is_featured', true)->inRandomOrder()->take(9)->get();
        return view('properties.index', compact('properties'));
    }

    public function show(Property $property): View
    {
        return view('properties.show', compact('property'));
    }
}
