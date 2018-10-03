<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    //
    public function store(Request $request)
    {
        $student = new Student();
        $student->student_id=$request->student_id;
        $student->last_name=$request->last_name;
        $student->first_name=$request->first_name;
        $student->course=$request->course;
        $student->year_level=$request->year_level;
        $student->save();

        return redirect()->route('admin.students.index');
        
    } 

    public function index() 
    {
    	 return view('admin.students.index');
    }
}
