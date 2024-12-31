<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\PasswordCategories;
use App\Models\Passwords;
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

        $passwords =  $PasswordsM->getAllPwdRecords();
        //$passwordsCategories =  $PasswordsM->getAllPwdRecords();
       // dd($passwords);
        //Get All Passwords
        //Get All PAsswords Categories
        
        return view('dashboard');

    }
    /**
     * Summary of newPassword
     * @return \Illuminate\Contracts\View\View
     */
    public function  newPassword(){
        return view('passwords.newpassword');
    }
    /**
     * Summary of savePassword
     * @return void
     */
    public function  savePassword(Request $request){

        $PasswordsM = new Passwords();
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'notes'=>'max:255',
         
        ]);

        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['notes'] = $request->notes;

       // dd($data);  
        $newPassword =   $PasswordsM->newPwdRecord($data);

        if(!$newPassword){
            return redirect(route('newpassword'))->with('error',"Registration failed, try again please");
        }

        return  redirect(route('dashboard'))->with('success',", Login to access the application");
    }
    // public function selectpassword($id){

    //     $PasswordsM = new Passwords();

    //     $pwd = $PasswordsM->newPwdRecord($id);
    //     return view('home',$pwd);
    //     //retrieve record from model
    // }
    public function readPassword($id){
        $PasswordsM = new Passwords();
        $selectedPassword = $PasswordsM->findPwdRecord($id);
        $data  = $selectedPassword;
        //dd($data);
        return view('passwords.readpassword',["data"=>$data]);
    }

    /**
     * Display Edit Password PAge with Selected Password
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function editPassword($id){


        $PasswordsM = new Passwords();

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
            'username'=>'required',
            'password'=>'required',
            'notes'=>'max:255',
         
        ]);

        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['notes'] = $request->notes;

        //dd($data);
        $updatedPassword =   $PasswordsM->updatePwdRecord($id,$data);

        if(!$updatedPassword){
            return redirect(route('editpassword'))->with('error',"Update Password failed, try again please");
        }

        return  redirect(route('dashboard'))->with('success',"");

    }
    /**
     * Summary of deletepassword
     * @param mixed $id
     * @return void
     */
    public function deletepassword($id){}
    /**
     * Summary of newPasswordcat
     * @return \Illuminate\Contracts\View\View
     */
    public function  newPasswordcat(){
          return view('home');
    }
    /**
     * Summary of savePasswordcat
     * @return void
     */
    public function  savePasswordcat(Request $request){

        $PwdCategoryM = new PasswordCategories();
        $request->validate([
            'title'=>'required',
            'notes'=>'max:255',
         
        ]);

        $data['title'] = $request->title;
        $data['notes'] = $request->notes;


        $newPasswordCategory =   $PwdCategoryM->newPasswordCategory($data);

        if(!$newPasswordCategory){
            return redirect(route('newpasswordcat'))->with('error',"New Password Category record failed, try again please");
        }

        return  redirect(route('home'))->with('success',"New Password Category record");
    }
    /**
     * Summary of selectpasswordcat
     * @param mixed $id
     * @return void
     */
    public function selectpasswordcat($id){}
    /**
     * Summary of readPasswordcat
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function readPasswordcat($id){
          return view('home');
    }
    /**
     * Summary of editpasswordcat
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function editpasswordcat($id){
          return view('home');
    }
        /**
         * Summary of updatepasswordcat
         * @param mixed $id
         * @return void
         */
        public function updatepasswordcat($id){}
    /**
     * Summary of deletepasswordcat
     * @param mixed $id
     * @return void
     */
    public function deletepasswordcat($id){}
}
