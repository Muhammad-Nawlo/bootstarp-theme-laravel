<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agent;
use App\Models\Image;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Agent::factory(5)->create()->each(function ($a) {
            Property::factory(20)->create(['agent_id' => $a->id])->each(function ($p) {
                Image::factory(5)->create(['property_id' => $p->id]);
            });
        });
        Testimonial::factory(20)->create();
    }
}
