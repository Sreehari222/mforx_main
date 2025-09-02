<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WelcomeVideo;
use Illuminate\Http\Request;

class WelcomeVideoController extends Controller
{
    public function index()
    {
        $videos = WelcomeVideo::all();
        return view('admin.welcome_videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.welcome_videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'position' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_file' => 'nullable|file|mimes:mp4,mov,avi,wmv,flv', // 50MB max
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,webp',
        ]);

        $data = $request->only(['title', 'position', 'video_url']);

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('welcome_thumbnails', 'public');
        }


        // Handle video upload
        if ($request->hasFile('video_file')) {
            $data['video_url'] = $request->file('video_file')->store('welcome_videos', 'public');
        }


        WelcomeVideo::create($data);

        return redirect()->route('admin.welcomevideos.index')
            ->with('success', 'Welcome video added successfully!');
    }

     public function edit(WelcomeVideo $welcomevideo)
    {
        return view('admin.welcome_videos.edit', compact('welcomevideo'));
    }

    public function update(Request $request, WelcomeVideo $welcomevideo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'position' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_file' => 'nullable|file|mimes:mp4,mov,avi,wmv,flv',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,webp',
        ]);

        $data = $request->only(['title', 'position', 'video_url']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('welcome_thumbnails', 'public');
        }

        if ($request->hasFile('video_file')) {
            $data['video_url'] = $request->file('video_file')->store('welcome_videos', 'public');
        }

        $welcomevideo->update($data);

        return redirect()->route('admin.welcomevideos.index')
            ->with('success', 'Welcome video updated successfully!');
    }

    public function destroy(WelcomeVideo $welcomevideo)
    {
        $welcomevideo->delete();
        return back()->with('success', 'Video deleted.');
    }
}
