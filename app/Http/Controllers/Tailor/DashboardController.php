<?php

namespace App\Http\Controllers\Tailor;
use App\User;
use Auth;
use App\cloth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $profile = User::where('id' , Auth::id())->first();
        $my_clothes = Cloth::where('brand_name', '=',  Auth::user()->brand_name)->get();

        return view('tailor.index', compact('profile', 'my_clothes'));
    }
}
