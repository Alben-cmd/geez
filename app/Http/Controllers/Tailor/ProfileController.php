<?php

namespace App\Http\Controllers\Tailor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use Hash;
use Auth;

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
        return view('tailor.profile', compact('profile'));
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

            // $validateData = $request->validate([
            // 'current_password' => 'required',
            // 'new_password' => 'required|string|min:6|confirmed',
            // ]);

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
            'email' => 'required|email|max:255|unique:users,email,'.$id,

            ]);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->brand_name = $request->brand_name;
        $user->email = $request->email;
        $user->save();

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
