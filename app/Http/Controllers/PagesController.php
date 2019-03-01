<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function getstarted(){
        return view('pages.getstarted');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function sitemap(){
        return view ('pages.sitemap');
    }
}
