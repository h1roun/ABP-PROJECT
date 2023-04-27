<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function store(Request $request) {
        Student::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->addresse,
        ]);
        return redirect()->back();
    }
    public function index()
    {
        $students = Student::all();
        return view('index', ['students' => $students]);
    }

}
