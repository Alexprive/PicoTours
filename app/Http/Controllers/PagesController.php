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
        return view('inc.getstarted');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function sitemap(){
        return view ('pages.sitemap');
    }

    public function booktour(){
        return view ('pages.booktour');
    }

    public function booktour2(){
    return redirect('/pages/cityoverview')->with('success', 'Your tour has been booked! You will recieve confirmation by e-mail within the hour!');
    }
    public function contact() {
        return view('inc.contact');

    }
}





