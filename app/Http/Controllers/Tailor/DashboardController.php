<?php

namespace App\Http\Controllers\Tailor;
use App\User;
use Auth;
use App\Cloth;
use App\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $profile = User::where('id' , Auth::id())->first();
        
        $categories = Category::get();

        return view('tailor.index', compact('profile', 'categories'));
    }

    public function messaging()
    {
        return view('tailor.message');
    }

    public function payment_history()
    {
        return view('tailor.payment_history');
    }
}
