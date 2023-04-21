<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Course;


class CourseController extends Controller

{
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $teacher_name = $request->input('teacher_name');
        $day = request('day');
        $hour = request('hour');
        $minute = request('minute');
        $date_and_time1 = Carbon::parse($day)->setTime($hour, $minute);
        $date_and_time = $date_and_time1->format('l g:i A');
        $price = $request->input('price');
        $sessions_per_payment = $request->input('sessions_per_payment');

        $course = new Course();
        $course->name = $name;
        $course->teacher_name = $teacher_name;
        $course->date_and_time = $date_and_time;
        $course->price = $price;
        $course->sessions_per_payment = $sessions_per_payment;
        $course->save();

        return redirect()->route('page.index');
    }
}
