<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth; 

class DashboardController extends Controller
{
    public function index()
    {
        $profile = User::where('id' , Auth::id())->first();
        return view('user.index', compact('profile'));
    }

    public function storereview($id)
    {
        // code...
    }
}
