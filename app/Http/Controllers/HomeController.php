<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $agents = Agent::query()->inRandomOrder()->take(3)->get();
        $testimonials = Testimonial::query()->inRandomOrder()->take(9)->get();
        $properties = Property::query()->with(['images'])->where('is_popular', true)->inRandomOrder()->take(9)->get();
        return view('welcome', compact('agents', 'testimonials', 'properties'));
    }
}
