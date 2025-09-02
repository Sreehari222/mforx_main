<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(WelcomeStatSeeder::class);
        $this->call(StatSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(UserSeeder::class);

    }
}
