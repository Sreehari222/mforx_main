<?php

namespace App\Http\Controllers;

use App\Models\StatsVisibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StatsVisibilityController extends Controller
{
    public function update(Request $request)
    {
        $visibility = StatsVisibility::first(); // assuming only one row exists

        $visibility->update([
            'show_job_seekers' => $request->has('show_job_seekers'),
            'show_companies' => $request->has('show_companies'),
            'show_profiles' => $request->has('show_profiles'),
            'show_connections' => $request->has('show_connections'),
        ]);

        return redirect()->back()->with('success', 'Visibility updated successfully.');
    }
}
