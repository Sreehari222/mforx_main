<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WelcomeStat;

class WelcomeStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    WelcomeStat::insert([
        ['value' => '25,000+', 'title' => 'Job seekers actively looking for jobs'],
        ['value' => '5,000+', 'title' => 'Employers looking for candidates'],
        ['value' => '250,000+', 'title' => 'Job vacancies listed'],
        ['value' => '24,000+', 'title' => 'Job applications processed'],
        ['value' => '300+', 'title' => 'Employer-reported candidate selections'],
        ['value' => 'Thousands', 'title' => 'Interview opportunities created'],
    ]);
}
}
