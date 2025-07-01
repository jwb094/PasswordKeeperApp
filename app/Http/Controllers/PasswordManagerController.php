<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Passwords;
use App\Models\PasswordCategories;
Use App\Http\Controllers\AuthManager;
class PasswordManagerController extends Controller
{   

  
    /**
     * Summary of dashboard
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard(){
        $authManagerC = new AuthManager;
        $PasswordsM = new Passwords();
        //$PasswordsM = new Passwords();
       

        if ($authManagerC->hasAUserLoggedIn() === false) {
            return  redirect(route('home'));
        }

        $passwords =  Passwords::all();
        $categories =  PasswordCategories::all();

        return view('dashboard',["passwords"=>$passwords,"categories"=>$categories]);

    }
    /**
     * Summary of newPassword
     * @return \Illuminate\Contracts\View\View
     */
    public function  newPassword(){
        $authManagerC = new AuthManager;
        if ($authManagerC->hasAUserLoggedIn() === false) {
            return  redirect(route('home'));
        }
        return view('passwords.newpassword');
    }
    /**
     * Summary of savePassword
     * @return void
     */
    public function  savePassword(Request $request){

        $PasswordsM = new Passwords();
        $validated =  $request->validate([
            'website'=>'required',
            'username'=>'required',
            'password'=>'required|min:12',
            'notes'=>'max:255',
        ]);

        $data['website'] = $validated['website'];
        $data['username'] = $validated['username'];
        $data['password'] = Hash::make($validated['password']);
        $data['notes'] = $validated['notes'];

        $newPassword =   $PasswordsM->newPwdRecord($data);

        if(!$newPassword){
            return redirect(route('newpassword'))->with('error',"Registration failed, try again please")->with(compact($data));
        }

        return  redirect(route('dashboard'))->with('success',", Login to access the application");
    }



    public function readPassword($id){
        $PasswordsM = new Passwords();
        $selectedPassword = $PasswordsM->findPwdRecord($id);
        $data  = $selectedPassword;
        //dd($data);
        return view('passwords.readpassword',["data"=>$data]);
    }

    /**
     * Display Edit Password Page with Selected Password
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function editPassword($id){


        $PasswordsM = new Passwords();

        $authManagerC = new AuthManager;

        if ($authManagerC->hasAUserLoggedIn() === false) {
            return  redirect(route('home'));
        }

        $editSelectPassword = $PasswordsM->findPwdRecord($id);

        $data  = $editSelectPassword;
        return view('passwords.editpassword',["data"=>$data]);
    }
    /**
     * Summary of updatepassword
     * @param mixed $id
     * @return void
     */
    public function updatepassword($id,Request $request){

        $PasswordsM = new Passwords();
        $request->validate([
            'website'=>'required',
            'username'=>'required',
            'password'=>'required|min:12',
            'notes'=>'max:255',
         
        ]);
        $data['website'] = $request->website;
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['notes'] = $request->notes;

        //dd($data);
        $updatedPassword =   $PasswordsM->updatePwdRecord($id,$data);

        if(!$updatedPassword){
            return redirect(route('editpassword'))->with('error',"Update Password failed, try again please")->with('data',$data);
        }

        return  redirect(route('dashboard'))->with('success',"");

    }
    /**
     * Summary of deletepassword
     * @param mixed $id
     * @return void
     */
    public function deletepassword($id){

        $PasswordsM = new Passwords();
        $Password = $PasswordsM->deletePwdecord($id);
        return redirect('/dashboard');
    }
    public function  create(){

        $authManagerC = new AuthManager;

        if ($authManagerC->hasAUserLoggedIn() === false) {
            return  redirect(route('home'));
        }

          return view('passwordCategories.newpasswordCategory');
    }
}
