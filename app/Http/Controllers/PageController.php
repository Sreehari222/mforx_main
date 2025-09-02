<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\ContactInvestorFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function ecosystem()
    {
        $testimonials = Testimonial::all();
        return view('sabkaecosystem', compact('testimonials'));
    }

    public function investor()
    {
        return view('investorcorner');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        Mail::to('harilalkannan92@gmail.com')->send(new ContactFormMail($validated));

        return response()->json([
            'message' => 'Message sent successfully'
        ]);
    }

    public function sendinvestor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mob' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        Mail::to('harilalkannan92@gmail.com')->send(new ContactInvestorFormMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
