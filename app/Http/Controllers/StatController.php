<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{

    public function index()
    {
        $stats = Stat::all()->keyBy('key');
        return view('admin.stats.edit', compact('stats'));
    }

    public function bulkUpdate(Request $request)
    {
        $request->validate([
            'job_seekers' => 'required|numeric',
            'companies' => 'required|numeric',
            'profiles' => 'required|numeric',
            'connections' => 'required|numeric',
        ]);

        foreach (['job_seekers', 'companies', 'profiles', 'connections'] as $key) {
            $stat = Stat::where('key', $key)->first();
            if ($stat) {
                $data = [
                    'value' => (float) $request->input($key),
                ];

                if ($request->has("visible_$key")) {
                    $data['visible'] = true;
                }

                $stat->update($data);
            }
        }

        return redirect()->back()->with('success', 'Stats updated successfully.');
    }


    public function updateVisibility(Request $request)
    {
        $visibilityData = [
            'job_seekers' => $request->has('visible_job_seekers'),
            'companies' => $request->has('visible_companies'),
            'profiles' => $request->has('visible_profiles'),
            'connections' => $request->has('visible_connections'),
        ];

        foreach ($visibilityData as $key => $visible) {
            $stat = \App\Models\Stat::where('key', $key)->first();
            if ($stat) {
                $stat->update(['visible' => $visible]);
            }
        }

        return redirect()->back()->with('success', 'Visibility updated successfully.');
    }
}
