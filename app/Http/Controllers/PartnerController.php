<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function create()
    {
        return view('admin.partners.create');
    }

    public function index()
    {
        $partners = Partner::latest()->get();
        return view('admin.partners.index', compact('partners'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $path = $request->file('logo')->store('partners', 'public');

        Partner::create([
            'name' => $request->name,
            'logo' => $path,
        ]);

        return redirect()->back()->with('success', 'Partner logo uploaded successfully!');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        // Delete logo file if it exists
        if ($partner->logo && file_exists(storage_path('app/public/' . $partner->logo))) {
            unlink(storage_path('app/public/' . $partner->logo));
        }

        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
