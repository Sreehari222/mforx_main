<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'count' => 'required|integer|min:0',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'count' => $request->count,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Counter updated successfully');
    }
}
