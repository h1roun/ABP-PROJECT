<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function store(Request $request)
    {


        $student = new Student;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->save();

        return redirect('/students');
    }
}
