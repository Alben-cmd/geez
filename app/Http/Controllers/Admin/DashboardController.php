<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cloth;
use App\Tailor;
use App\Comment;
use App\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = User::where('id' , Auth::id())->first();
        $my_clothes = Cloth::where('brand_name', '=',  Auth::user()->brand_name)->orderBy('created_at', 'desc')->get();
        $tailors = User::where('role_id' , 2)->orderBy('created_at', 'desc')->get();
        $approved_comments = Comment::where('approved', '1')->orderBy('created_at', 'desc')->get();
        $categories = Category::get();
        $unapproved_comments = Comment::where('approved', '0')->orderBy('created_at', 'desc')->get();

        return view('admin.index', compact('profile', 'my_clothes', 'tailors', 'approved_comments', 'unapproved_comments', 'categories'));
    }
}
