<?php

namespace App\Repository;

use toastr;
use App\Models\Grade;
use App\Traits\GraidTrait;
use App\Traits\queryTrait;

 class GradeRepository{
   use GraidTrait ,queryTrait;


    public function store($request){

        $this->storeGraidTrait($request);
        toastr()->success(trans('messages.success'));

    }

    public function update($request){

     $grade =  $this->get_data_byId(new Grade(),$request->id ); // to find item by id

     $this->updateGraidTrait($request,$grade);
     toastr()->success(trans('messages.Update'));

    }

    public function delete_item($request){
     $grade =  $this->get_data_byId(new Grade(),$request->id ); // to find item by id
     $grade->delete();

    }
 }
