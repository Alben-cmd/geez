<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use App\User;
use Auth;

class HomeController extends Controller
{
   public function __construct(Database $database)
    {
        $this->database = $database;
        // $this->tablename = 'UploadsMaster';

    }

    public function index()
    {
        // getting the trending cloths to be displayed at the front

        //getting the refrences from trending dataset
        $clothes = $this->database->getReference('Trending')->getValue();
        //getting the values inside the array 
        $clothes = array_values($clothes);
        // creating an array to keep the fetched values from the link in trending
        $cloth_array = [];
        // doing a foreach to get the links in trending
        foreach ($clothes as $key => $links) 
        {
        // getting the main values from the uploadsmaster as provided by the trending link 
        $main_clothes = $this->database->getReference($links)->getValue();
        // putting the values into the array created
        array_push($cloth_array, $main_clothes);
        // dd($main_clothes);
        }
        // dd($cloth_array);

        // getting the tailors
        $tailors = $this->database->getReference('TailorBase')->getValue();

        // dd($tailors);

        return view('front.welcome', compact('cloth_array', 'tailors'));
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


// $clothes = $this->database->getReference('Trending')->getValue();
       
//        dd($clothes);
//        array_pop($clothes);