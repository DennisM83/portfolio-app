<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('Pages.about');
    }

    public function contact()
    {
        return view('Pages.contact');
    }
}
