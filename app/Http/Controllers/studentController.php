<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\student;
use Illuminate\Support\Facades\File;
use App\Controllers\HomeController;

class studentController extends Controller
{ /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        $students = student::orderBy('age','ASC')->paginate(6);
       return view('student.list',['students' => $students]);
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'discription' => 'required',
            'time' => 'required',
            'age' => 'required',
            'state' => 'required'
        
        ]);
        if( $validator->passes() )
        {
                    //save data

                    $student = new student();
                    $student->name = $request->name;
                    $student->discription = $request->discription;
                    $student->time = $request->time;
                    $student->age = $request->age;
                    $student->state = $request->state;
                    $student->save();

                    

                    return redirect()->route('students.index')->with('success','Record added successfully');


        }
        else
        {
            return redirect()->route('students.create')->withErrors($validator)->withInput();
        }

    }
    public function edit($id)
    {
        $student = student::findOrFail($id);
       
        return view('student.edit',['student'=>$student]);
    }
    public function update($id,Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'discription' => 'required',
            'time' => 'required',
            'age' => 'required',
            'state' => 'required'
        
        ]);
        if( $validator->passes() )
        {
                    //save data

                    $student = student::find($id);
                    $student->name = $request->name;
                    $student->discription = $request->discription;
                    $student->time = $request->time;
                    $student->age = $request->age;
                    $student->state = $request->state;
                    $student->save();

                   


    
                    return redirect()->route('students.index')->with('success','Record edited successfully');

                }
                else
                {
                    return redirect()->route('students.edit',$id)->withErrors($validator)->withInput();
                }

  
    }
     public function destory($id,Request $request)
    {
        $student = student::findOrFail($id);
       // File::delete(public_path().'/uploads/students/'.$student->image);
        $student->delete();

         $request->session()->flash('success','Record delete Successfully');   
        return redirect()->route('students.index');
    }

}
