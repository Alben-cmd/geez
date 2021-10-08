<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;

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
        // dd($profile);
        return view('front.profile', compact('profile'));
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


        if ($request->has('current-password')) {

            $validateData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            ]);
            $user = User::find($id);

            if (!(Hash::check($request->get('current-password'), Auth::user()->password)))
        {
            return redirect()->back()->with("error","Your Current Password does not matches!");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) ==0)
        {
            return redirect()->back()->with("error", "New Password Cannot be same as your Current password!");
        }

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->brand_name = $request->brand_name;
        $user->email = $request->email;

        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        }

        else{

            
           $validateData = $request->validate([

            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,

            ]);
           $user = User::find($id);


        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->brand_name = $request->brand_name;
        $user->email = $request->email;
        $user->save();

        }
        return redirect()->back()->with('success', 'Profile Updated!');
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
