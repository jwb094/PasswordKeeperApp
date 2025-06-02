<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
Use App\Http\Controllers\AuthManager;
use App\Models\PasswordCategories;
class PasswordCategoryController extends Controller
{
    //

        // Show the form
    public function showForm()
        {
            $authManagerC = new AuthManager;

            if ($authManagerC->hasAUserLoggedIn() === false) {
                return  redirect(route('home'));
            }
    
              return view('passwordCategories.newpasswordCategory');
        }


        /**
     * Display Edit Password PAge with Selected Password
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function editData($id){


       // $CategoryM = new PasswordCategories();

        $authManagerC = new AuthManager;

        if ($authManagerC->hasAUserLoggedIn() === false) {
            return  redirect(route('home'));
        }

        $editSelectCategory = PasswordCategories::findOrFail($id);

        $data  = $editSelectCategory;
        return view('passwordCategories.editpasswordCategory',["data"=>$data]);
    }


      /**
     * Summary of updatepassword
     * @param mixed $id
     * @return void
     */
    public function updatepassword($id,Request $request){

        $PasswordsM = new PasswordCategories();
        $request->validate([
            'title'=>'required',
            'notes'=>'max:255',
         
        ]);
        $data['website'] = $request->title;
        $data['notes'] = $request->notes;

        //dd($data);
        $updatedPassword =   $PasswordsM->updatePwdRecord($id,$data);

        if(!$updatedPassword){
            return redirect(route('editpassword'))->with('error',"Update Password failed, try again please");
        }

        return  redirect(route('dashboard'))->with('success',"");

    }


        /**
     * Summary of savePasswordcat
     * @return void
     */
    public function  storeData(Request $request){


         // Validation 
         $request->validate([
            'title'=>'required',
            'notes'=>'max:255',
            
        ]);
        // Stored request content in an Array
        // $data['title'] = $validated['title'];
        // $data['notes'] =  $validated['notes'];

        //dd($request['title']);
        $newPasswordCategory =  PasswordCategories::create(attributes: [
            'title' => $request['title'],
            'notes' => $request['notes']
        ]);

        if(!$newPasswordCategory){
            return redirect('category')->with('failure', 'New Password Category record failed, try again please"');
          //return redirect('/category');
        }

        return  redirect('/dashboard');

    }


    /**
     * Summary of deletepassword
     * @param mixed $id
     * @return void
     */
    public function destroy($id){

         // Find the category by its ID
         $category = PasswordCategories::findOrFail($id);
        // Delete the category
        $category->delete();

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Category deleted successfully.');


        //$PwdCategoryM->deletePwdecord($id);

    }
}
