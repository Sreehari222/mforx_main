<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function adminIndex()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

   public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'role'  => 'required|string|max:255',
            'media' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi,wmv|max:51200', // 50MB max
        ]);

        $file = $request->file('media');
        $type = str_contains($file->getMimeType(), 'video') ? 'video' : 'image';
        $path = $file->store('gallery', 'public');

        Gallery::create([
            'name' => $request->name,
            'role' => $request->role,
            'type' => $type,
            'file_path' => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Media uploaded successfully!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'role'  => 'required|string|max:255',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi,wmv',
        ]);

        if ($request->hasFile('media')) {
            if ($gallery->file_path && Storage::disk('public')->exists($gallery->file_path)) {
                Storage::disk('public')->delete($gallery->file_path);
            }

            $file = $request->file('media');
            $type = str_contains($file->getMimeType(), 'video') ? 'video' : 'image';
            $path = $file->store('gallery', 'public');

            $gallery->update([
                'type' => $type,
                'file_path' => $path,
            ]);
        }

        $gallery->update([
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Media updated successfully!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->file_path && Storage::disk('public')->exists($gallery->file_path)) {
            Storage::disk('public')->delete($gallery->file_path);
        }

        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Media deleted successfully!');
    }
}
