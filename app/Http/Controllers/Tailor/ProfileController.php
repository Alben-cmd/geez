
<?php

namespace App\Http\Controllers\Tailor;

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
    // dd($request);  
        $user = User::find($id);

        $validateData = $request->validate([

            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone_1' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,

            ]);

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

        if ($request->has('picture')) {
        $path = public_path().'/assets/images/tailors/';      
        $originalImage = $request->file('picture');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 

        $user->picture = $name;
        
        }

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->brand_name = $request->brand_name;
        $user->phone_1 = $request->phone_1;
        $user->phone_2 = $request->phone_2;
        $user->location = $request->location;
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
