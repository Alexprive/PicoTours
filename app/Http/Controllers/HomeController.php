<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\User;
use App\UserProfile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::where('user_id', auth()->id())->get();
        $userprofile = UserProfile::where('user_id', auth()->id())->get();
        $user = User::where('id', auth()->id())->first();


        return view('home')->with(['tours' => $tours, 'hasProfile' => count($userprofile), 'userprofile' => $userprofile, 'user' => $user ]);
    }

    public function admin()
    {
        return view('admin');
    }
}
//        dd(count($userProfile));
//return view('home')->with(['tours' => $tours, 'hasProfile' => count($userProfile)]);