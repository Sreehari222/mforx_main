<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsVisibility extends Model
{
    protected $table = 'stats_visibility';

    protected $fillable = [
        'show_job_seekers',
        'show_companies',
        'show_profiles',
        'show_connections',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
