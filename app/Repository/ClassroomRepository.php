<?php

namespace App\Repository;

use App\Models\Classroom;
use toastr;
use App\Models\Grade;
use App\Traits\ClassroomTrait;
use App\Traits\GraidTrait;
use App\Traits\queryTrait;

 class ClassroomRepository{
   use ClassroomTrait ,queryTrait;


    public function store($request){


       $List_Classes = $request->List_Classes;



       $this->storeClassroomTrait($List_Classes);


        toastr()->success(trans('messages.success'));

    }

    public function update($request,$Classroom){



   $Classroom2 =  $this->get_data_byId(new Classroom(),$request->id ); // to find item by id

//Classroom

       $this->updateClassroomTrait($request,$Classroom);


        toastr()->success(trans('messages.success'));

    }

    public function delete_item($request){



    }
 }
