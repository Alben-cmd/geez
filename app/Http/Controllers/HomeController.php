<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use App\Tailor;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  
    public function index()
    {       
        $clothes = DB::table('comments')
        ->join('cloths', 'comments.cloth_id', '=', 'cloths.id')
        ->select(DB::raw('avg(stars_rated) as average, cloths.*'))
        ->groupBy('cloth_id')
        ->orderBy('average', 'desc')
        ->take(6)
        ->get();
  
        $ids = array();
        foreach($clothes as $cloth){  
            array_push($ids, $cloth->id);
            
        }
        $clothes = Cloth::whereIn('id', $ids)->get();        
        
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

        $tailor = User::where( 'fname', 'like', "%$query%" )
                        ->orWhere('lname', 'like', "%$query%")
                        ->orWhere('brand_name', 'like', "%$query%")
                        ->orWhere('location', 'like', "%$query%")
                        ->paginate(10);


        return view('front.search_results', compact('cloth', 'tailor'));
    }

    // public function try (Request $request)
    // {
    //     dd($request);
    // }
}