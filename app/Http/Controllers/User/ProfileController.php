<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Hash;
use Auth;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::where('id' , Auth::id())->first();
        return view('user.profile', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $user = User::find($id);

        if ($request->filled('current_password')) {

        if (!(Hash::check($request->get('current_password'), Auth::user()->password)))
        {
            return redirect()->back()->with("error","Your Current Password does not matches!");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) ==0)
        {
            return redirect()->back()->with("error", "New Password Cannot be same as your Current password!");
        }

        $user->password = bcrypt($request->get('new_password'));

        }
            
           $validateData = $request->validate([

            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone_1' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,

            ]);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone_1 = $request->phone_1;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Profile Updated!');
    }

    public function user_tailor(Request $request, $id)
    {
        $user = User::find($id);
            
       $validateData = $request->validate([

        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'brand_name' => 'required|string|max:255',
        'phone_1' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,'.$id,
        'picture' => 'required|mimes:jpeg,png,jpg|max:2048'

        ]);

        $path = public_path().'/assets/images/tailors/';      
        $originalImage = $request->file('picture');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->location = $request->location;
        $user->brand_name = $request->brand_name;
        $user->phone_1 = $request->phone_1;
        $user->phone_2 = $request->phone_2;
        $user->email = $request->email;
        $user->picture = $name;
        $user->role_id = '2';
        $user->save();

        return redirect()->back()->with('success', 'You have been Upgraded to a Tailor!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
