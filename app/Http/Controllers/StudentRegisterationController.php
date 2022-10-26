<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentRegisterationController extends Controller
{
    public function show ($student_id) {
        $student = Student::with(['registered_courses', 'registered_courses.course'])->find($student_id);
        // dd($student->toArray());
        return view('students.regiser')->with('student', $student);
    }
}
