<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Testimonial::create(['title' => 'companies hired successfully', 'count' => 1000]);
        Testimonial::create(['title' => 'job seekers placed', 'count' => 1000]);
    }
}
