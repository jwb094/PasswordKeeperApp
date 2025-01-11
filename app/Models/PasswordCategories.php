<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordCategories extends Model
{
    //


    protected $table ="password_categories";
   // public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

     //protected $guarded =[];
    protected $fillable = [
        'title',
        'notes'
    ];


     function create($data){
        //dd($data);

        //$setting = PasswordCategories::firstOrNew($data);
        //return $setting;
       // dd($setting);
      // PasswordCategories::create($data);
      return self::create($data);
         //return PasswordCategories::firstOrNew($data);
    }


    //

     function getAllRecords(){
        return self::all();
      }


     /**
      * Find A password Record via ID
      * @param mixed $id
      * @return \Illuminate\Database\Eloquent\Collection
      */
       function findRecord($id){
        return self::findOrFail($id);
    }

    //Update  Password by ID
     function updateRecord($id,$data){
       // dd($data);
        return self::find($id)->update($data);
    }
    //Delete User
     function deleteRecord($id){
      return self::find($id)->delete();
    }
}
