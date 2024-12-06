<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.home');
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function projects()
    {
        return view('portfolio.projects');
    }

    public function skills()
    {
        return view('portfolio.skills');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function submitContact(Request $request)
    {
        // Handle contact form submission (e.g., save to database or send email)
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
