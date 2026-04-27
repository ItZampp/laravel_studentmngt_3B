<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function stud()
    {
        return view('student_mng.students');
        // return view('student_mng.create');
    }

    public function creates()
    {
        return view('student_mng.create');
    }

    public function Edit()
    {
        return view('student_mng.edit');
    }

    public function Delete()
    {
        return view('student_mng.delete');
    }
}

