<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cloth;
use App\Tailor;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = User::where('id' , Auth::id())->first();
        $my_clothes = Cloth::where('brand_name', '=',  Auth::user()->brand_name)->get();
        $tailors = User::where('role_id' , 2)->get();

        return view('admin.index', compact('profile', 'my_clothes', 'tailors'));
    }
}
