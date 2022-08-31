<?php

namespace App\Http\Controllers\Classrooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroom;
use App\Models\Classroom;
use App\Models\Grade;
use App\Repository\ClassroomRepository;
use App\Traits\queryTrait;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{

    use queryTrait;

    protected $classroomRepository;
    public function __construct(ClassroomRepository $classroomRepository)
    {
        $this->classroomRepository=$classroomRepository;
    }
    public function index()
    {
       $Grades = $this->get_all_data(new Grade());
       $My_Classes = $this->get_all_data(new Classroom());



       return view('pages.My_Classes.My_Classes')->with(compact('My_Classes','Grades'));
    }


    public function create()
    {

    }


    public function store(StoreClassroom   $request)
    {




        try {
            $validated = $request->validated();
            $this->classroomRepository->store($request);




            return redirect()->route('Classrooms.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(StoreClassroom $request)
    {

     $Classroom =  $this->get_data_byId(new Classroom(),$request->id ); // to find item by id


        try {
            $validated = $request->validated();
            $this->classroomRepository->update($request,$Classroom);




            return redirect()->route('Classrooms.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy(Request $request)
    {
        $Classroom =  $this->get_data_byId(new Classroom(),$request->id ); // to find item by id
        $Classroom->delete();
     toastr()->error(trans('messages.Delete'));

     return redirect()->route('Classrooms.index');

    }
}
