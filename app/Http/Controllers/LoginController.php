<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Stat;
use App\Models\StatsVisibility;
use App\Models\Testimonial;
use App\Models\Video;
use App\Models\WelcomeStat;
use App\Models\WelcomeVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        $videos = Video::latest()->get(); // Fetch all videos
        $welcomeVideos=WelcomeVideo::all();
        $stats = Stat::all()->keyBy('key');
        $galleries = Gallery::latest()->get(); // Fetch all stats and key them by 'key' column
        $stats = \App\Models\Stat::all();
        $welcomeStats = WelcomeStat::all();
        $testimonials = Testimonial::all();
        $visibility = StatsVisibility::first();


        return view('Admin.Dashboard.index', compact('videos', 'stats','galleries','stats','welcomeStats','testimonials','visibility'));
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
