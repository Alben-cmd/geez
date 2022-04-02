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
        $clothes = Cloth::where( 'trending', '1')->take(6)->inRandomOrder()->get();
        // $tailors = Tailor::take(6)->inRandomOrder()->get();
        $tailors = User::where('role_id', '=', '2')->inRandomOrder()->take(6)->get();
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

    public function search(Request $request)
    {
   
        $request ->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');

        $cloth = Cloth::where('name', 'like', "%$query%")->paginate(10);

             
     // $tailor = User::where('role_id', '=',  '2')
     //            ->where(function ($query) use ($request) {
     //        $query->where('lname', 'like', '%' . $request->search . '%');
     //        $query->orWhere('fname', 'like', '%' . $request->search . '%');
     //    })->get();   


        $tailor = User::where( 'fname', 'like', "%$query%" )
                        ->orWhere('lname', 'like', "%$query%")
                        ->orWhere('brand_name', 'like', "%$query%")
                        ->orWhere('location', 'like', "%$query%")
                        ->paginate(10);


        return view('front.search_results', compact('cloth', 'tailor'));
    }
}