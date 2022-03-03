<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo; 

    public function redirectTo()
    {
        
        switch(Auth::user()->role_id){
            case 1:
                $this->redirectTo = route('user.dashboard');
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = route('tailor.dashboard');
                return $this->redirectTo;
                break;
            case 3:
            $this->redirectTo = route('admin.dashboard');
            return $this->redirectTo;
                break;
            
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
            }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        // dd($data);
        return Validator::make($data, [
            'role_id' => ['required'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'phone_1' => ['required', 'digits:11', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // dd($data);
        $request = request();

        if ($request->has('picture')) {
        $path = public_path().'/assets/images/tailors/';      
        $originalImage = $request->file('picture');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 
        
        }     

    else{
        $name = null;
    }
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'brand_name' => $data['brand_name'],
            'picture' => $name,
            'phone_1' => $data['phone_1'],
            'phone_2' => $data['phone_2'],
            'location' => $data['location'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
