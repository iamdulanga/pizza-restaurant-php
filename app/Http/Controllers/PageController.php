<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featuredPizzas = Product::where('category', 'Pizza')->take(6)->get();
        $specialOffers = Product::where('special_offer', true)->take(4)->get();

        return view('home', compact('featuredPizzas', 'specialOffers'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function handleContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogSingle()
    {
        return view('blog-single');
    }
}
