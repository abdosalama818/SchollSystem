<?php


namespace App\Traits;

use App\Models\Grade;
use App\Models\Classroom;

trait ClassroomTrait{


    public function storeClassroomTrait($List_Classes)
    {
        foreach ($List_Classes as $List_Class) {

            $My_Classes = new Classroom();

            $My_Classes->Name_Class = ['en' => $List_Class['Name_class_en'], 'ar' => $List_Class['Name']];

            $My_Classes->Grade_id = $List_Class['Grade_id'];

            $My_Classes->save();

        }

    }


        public function updateClassroomTrait($request,$Classroom)
        {
            $Classroom->update([
                'Name_Class'=>['en' => $request->Name_class_en, 'ar' => $request->Name],
                'Grade_id'=>$request->Grade_id
            ]);

        }







}
