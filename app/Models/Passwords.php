<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    //

    protected $table ="passwords";

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'password',
        'notes',
    ];


    public function newPwdRecord($data){
        //dd($data);   
        return self::create($data);
    }


    //

    function getAllPwdRecords(){
        return self::all();
      }


     /**
      * Find A password Record via ID
      * @param mixed $id
      * @return \Illuminate\Database\Eloquent\Collection
      */
     function findPwdRecord($id){
        return self::findOrFail($id);
    }

    //Update  Password by ID
    function updatePwdRecord($id,$data){
       // dd($data);
        return self::find($id)->update($data);
    }
    //Delete User
    function deletePwdecord($id){
      return self::find($id)->delete();
    }

    
}
