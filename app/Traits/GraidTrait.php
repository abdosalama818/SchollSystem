<?php


namespace App\Traits;

use App\Models\Grade;

trait GraidTrait{


    public function storeGraidTrait($request){

        Grade::create([
            'Name'=>['en' => $request->Name_en, 'ar' => $request->Name,JSON_UNESCAPED_UNICODE],
            'Notes'=>$request->Notes
        ]);
    }


        public function updateGraidTrait($request,$grade){

            $grade->update([
                'Name'=>['en' => $request->Name_en, 'ar' => $request->Name,JSON_UNESCAPED_UNICODE],
                'Notes'=>$request->Notes
            ]);
        }







}
