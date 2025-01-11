<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\PasswordCategories;
class PasswordCategoryController extends Controller
{
    //



        /**
     * Summary of savePasswordcat
     * @return void
     */
    public function  store(Request $request){
        //dd($request);
        $PwdCategoryM = new PasswordCategories();
        $request->validate([
            'title'=>'required',
            'notes'=>'max:255',
            
        ]);

        $data['title'] = $request->title;
        $data['notes'] =  $request->notes;
       // dd($data);

      
        $newPasswordCategory =   $PwdCategoryM->create($data);
       // dd($newPasswordCategory->id);
        if(!$newPasswordCategory){
            return redirect(route('category.create'))->with('error',"New Password Category record failed, try again please");
        }

        return  redirect(route('dashboard'))->with('success',"New Password Category record");
    }
}
