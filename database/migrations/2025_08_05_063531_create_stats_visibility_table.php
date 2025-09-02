<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stats_visibility', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_job_seekers')->default(true);
            $table->boolean('show_companies')->default(true);
            $table->boolean('show_profiles')->default(true);
            $table->boolean('show_connections')->default(true);
            $table->timestamps();
        });

        // Optional: Seed one row
        DB::table('stats_visibility')->insert([
            'show_job_seekers' => true,
            'show_companies' => true,
            'show_profiles' => true,
            'show_connections' => true,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats_visibility');
    }
};
