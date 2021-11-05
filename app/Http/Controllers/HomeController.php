<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use App\Tailor;
use App\User;
use Auth;

class HomeController extends Controller
{
  
    public function index()
    {
        $clothes = Cloth::take(6)->inRandomOrder()->get();
        $tailors = Tailor::take(6)->inRandomOrder()->get();
        return view('front.welcome', compact('clothes', 'tailors'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}