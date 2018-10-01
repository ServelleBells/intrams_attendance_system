<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function store(Request $request)
    {
        $student = new Student();
        $student->student_id=$student->student_id;
        $student->last_name=$student->last_name;
        $student->first_name=$student->first_name;
        $student->course=$student->course;
        $student->year_level=$student->year_level;
        $student->save();

        return redirect()->route('student');
        
    }
}
