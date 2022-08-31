<?php

namespace App\Http\Controllers\Grades;

use toastr;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGrades;
use App\Repository\GradeRepository;
use App\Traits\queryTrait;

class GradeController extends Controller
{

    use queryTrait;
    protected $GraidRepository ;
    public function __construct(GradeRepository $GraidRepository)
    {
        $this->GraidRepository = $GraidRepository;
    }
    public function index()
    {
       // return 'ssssssssss';
       $Grades = Grade::all();

      return view('pages.Grades.Grades')->with(compact('Grades'));
    }


    public function create()
    {
        //
    }

    public function store(StoreGrades  $request)
    {
          $this->unique_data(new Grade(),'Name->ar',$request->Name,'Name->en',$request->Name_en);

       try{
        $validated = $request->validated();
        $this->GraidRepository->store($request);
        return back();
       } catch (\Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(StoreGrades $request )
    {




      try{
            $validated = $request->validated();
            $this->GraidRepository->update($request);
            return back();
           } catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
           }

    }

    public function destroy(Request $request)
    {


      try{
        $this->GraidRepository->delete_item($request);
        return back();
       } catch (\Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }



    }
}
