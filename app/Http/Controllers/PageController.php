<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function contact()
    {
        return view('Pages.contact');
    }

    public function admin()
    {
        return view('admin.admin-main');
    }
}
