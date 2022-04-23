<?php

namespace App\Http\Controllers;

use App\Models\Student;

class ControllerStudent extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'students'=> $students,
        ]);
    }
}
