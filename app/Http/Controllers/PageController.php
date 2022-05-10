<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('Pages.index');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function contact()
    {
        return view('Pages.contact');
    }
}
