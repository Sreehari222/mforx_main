<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Stat;
use App\Models\Testimonial;
use App\Models\Video;
use App\Models\WelcomeStat;
use App\Models\WelcomeVideo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        if (!session()->has('user')) {
            return redirect()->route('login');
        }
        $partners = Partner::all();
        $welcomeVideos = WelcomeVideo::all();
        $videos = Video::latest()->get();
        $stats = Stat::all()->keyBy('key');
        $galleries = Gallery::latest()->get();
        $stats = \App\Models\Stat::all();
        $welcomeStats = WelcomeStat::all();
        $testimonials = Testimonial::all();


        return view('index', compact('videos', 'stats','galleries','stats','welcomeStats','testimonials','welcomeVideos','partners'));
    }

    public function notfound(){
        return view('404');
    }
}
