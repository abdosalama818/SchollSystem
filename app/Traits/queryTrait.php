<?php


namespace App\Traits;

use App\Models\Grade;

trait queryTrait{


    public function get_all_data($model){

     return $model::all();
    }




    public function get_data_byId($model,$id){

        return $model::find($id);
       }





}


