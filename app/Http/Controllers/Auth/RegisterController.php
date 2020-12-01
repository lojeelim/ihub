<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'user_type' => ['required', 'string', 'max:255'],
            'user_image' => 'image|nullable|max:1999',
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
        /*   this is code for image  user auth */

        if(!empty($data['user_image'])){
            $file_with_ext = $data['user_image']->getClientOriginalName();
            $filename = pathinfo($file_with_ext, PATHINFO_FILENAME);
            $extention = $data['user_image']->getClientOriginalExtension();
            $file = $filename.'_'.time().'.'.$extention;
            //another option--> $data['user_image']->move(public_path().'public/user_images',$file);
            //$data['user_image']->storeAs('public/user_images/'.$data['email'], $file);
            $data['user_image']->storeAs('public/user_images', $file);
        }
        else{
            $file = "noimage.jpeg";
        }
       
    
         return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'user_type' => $data['user_type'],
            'user_image' => $file,
        ]);
    }
}
