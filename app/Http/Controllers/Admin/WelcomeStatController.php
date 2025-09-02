<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeStat;

class WelcomeStatController extends Controller
{


    public function index()
    {
        $stats = WelcomeStat::all();
        return view('admin.WelcomeStart.index', compact('stats'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);

        WelcomeStat::create($request->only('title', 'value'));
        return redirect()->route('admin.welcome_stats.index')->with('success', 'Stat added successfully!');
    }

    public function edit(WelcomeStat $welcome_stat)
    {
        return view('admin.WelcomeStart.edit', compact('welcome_stat'));
    }


    public function update(Request $request, WelcomeStat $welcome_stat)
    {
        $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);

        $welcome_stat->update($request->only('title', 'value'));
        return redirect()->route('admin.welcome_stats.index')->with('success', 'Stat updated!');
    }

    public function destroy(WelcomeStat $welcome_stat)
    {
        $welcome_stat->delete();
        return back()->with('success', 'Stat deleted!');
    }
}
