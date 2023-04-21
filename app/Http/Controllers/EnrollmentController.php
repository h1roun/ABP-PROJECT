<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        $students = Student::all();
        return view('enrollments.create', compact('courses', 'students'));
    }
}
