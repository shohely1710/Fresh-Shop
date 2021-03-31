<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.dashboard.index');
    }

    public function about()
    {
        return view('frontend.pages.about_us.about');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery.gallery-view');
    }
    public function contact()
    {
        return view('frontend.pages.contact.contact-us');
    }



}


