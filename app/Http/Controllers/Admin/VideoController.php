<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the videos.
     */
    public function index()
    {
        $videos = Video::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new video.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created video in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'type'        => 'required|in:self,premium',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png',
            'video_url'   => 'nullable|mimes:mp4,mov,avi|max:51200',
            'external_link' => 'nullable|url',
        ]);

        $data = $request->only('title', 'type', 'external_link');

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('video_url')) {
            $data['video_url'] = $request->file('video_url')->store('videos', 'public');
        }

        Video::create($data);

        return redirect()->route('admin.videos.index')->with('success', 'Video added successfully.');
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
{
    // Find the video
    $video = Video::findOrFail($id);

    // Validate inputs
    $validatedData = $request->validate([
        'title'      => 'required|string|max:255',
        'type'       => 'required|string|max:255',
        'thumbnail'  => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'video_url'  => 'nullable',
    ]);

    // Update basic fields
    $video->title = $validatedData['title'];
    $video->type  = $validatedData['type'];

    // Handle thumbnail upload
    if ($request->hasFile('thumbnail')) {
        // Delete old thumbnail if exists
        if ($video->thumbnail && file_exists(public_path($video->thumbnail))) {
            unlink(public_path($video->thumbnail));
        }

        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        $video->thumbnail = 'storage/' . $thumbnailPath;
    }

    // Handle video upload
    if ($request->hasFile('video_url')) {
        // Delete old video if exists
        if ($video->video_url && file_exists(public_path($video->video_url))) {
            unlink(public_path($video->video_url));
        }

        $videoPath = $request->file('video_url')->store('videos', 'public');
        $video->video_url = 'storage/' . $videoPath;
    }

    // Save changes
    $video->save();

    return redirect()->route('admin.videos.index')->with('success', 'Video updated successfully!');
}



    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }
}
