<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthManager extends Controller
{
    //

        /**
     * Summary of home : Display Dashboard
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function home()
    {       
        return view('home');
    }


    
  /**
     * Summary of home : Display Register Page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function register()
    {
        if(Auth::check()){
            return  redirect(route('home'));
        }
        return view('register');
    }


      /**
     * Summary of home : Display Dashboard
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function dashboard()
    {       

        if($this->hasAUserLoggedIn() === false){
            return  redirect(route('login'));
        }
        return view('home');
    }




       /**
     * Summary of home : Validates and Register New User
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function registerPost(Request $request)
    {
        $userM = new User();
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);

        $data['first_name'] = $request->firstname;
        $data['last_name'] = $request->lastname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user =   $userM->newUser($data);

        if(!$user){
            return redirect(route('registeration'))->with('error',"Registration failed, try again please");
        }

        return  redirect(route('home'))->with('error',"Registration successfully, Login to access the application");;
    }


    /**
     * Summary of home : Validates and Register New User
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function loginPost(Request $request)
    {
       
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
       
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'))->with('success',"You have successfully logged in");
            
       
        }
        return  redirect(route('home'))->with('error',"Login details are incorrect");
    }


    /**
     * Summary of home : Validates and Register New User
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function logOut(){
        Session::flush();
        Auth::logout();

        return  redirect(route('home'));
    }

    
}
