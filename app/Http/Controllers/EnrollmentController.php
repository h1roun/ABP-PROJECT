<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $student_id = $request->input('student_id');
        $course_id = $request->input('course_id');

        $enrollment = new Enrollment();
        $enrollment->student_id = $student_id;
        $enrollment->course_id = $course_id;
        $enrollment->save();

        return redirect()->back();
    }
    public function show($courseId)
    {
        $course = Course::find($courseId);
        $enrollments = Enrollment::where('course_id', $courseId)->with('student')->get();

        return view('math', compact('course', 'enrollments'));
    }

}
