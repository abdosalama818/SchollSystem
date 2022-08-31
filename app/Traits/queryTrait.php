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


       public function unique_data($model,$column1,$request_1,$column2,$request_2){

        $query = $model::where($column1,$request_1)->orWhere($column2,$request_2)->exists();
        if($query){
            return redirect()->back()->withErrors(trans('Grades_trans.exists'));
        }
          return 'succes';
       }




}


