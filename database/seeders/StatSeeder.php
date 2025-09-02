<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Stat::insert([
        ['key' => 'job_seekers', 'value' => 98],
        ['key' => 'companies', 'value' => 78],
        ['key' => 'profiles', 'value' => 90],
        ['key' => 'connections', 'value' => 95],
    ]);
}
}
