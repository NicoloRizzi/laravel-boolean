<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * HOMEPAGE
     */
    public function index()
    {
        return view('static-pages.index');
    }

    /**
     * PRIVACY
     */
    public function privacy()
    {
        return view('static-pages.privacy');
    }

    /**
     * FAQ
     */
    public function faq()
    {
        return view('static-pages.faq');
    }
}
