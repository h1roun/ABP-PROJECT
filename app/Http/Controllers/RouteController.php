<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Carbon;

class RouteController extends Controller
{


    public function index()
    {
        $posts = Student::all();
        $courses = Course::all();
        $enrolled_students = null;
        $course = Course::find(2);

        if ($course) {
            $enrolled_students = $course->students;
        }

        return view('index', compact('posts', 'courses', 'enrolled_students'));
    }
    public function dashboard()
    {
        $dayName = Carbon::now()->format('l');

        $today_courses = Course::where('date_and_time', 'like', "%{$dayName}%")->get();

        return view('dashboard', compact('today_courses'));
    }
    public function formations(){
        $courses = Course::all();
        $courses = $courses->sortBy('name');
        $formations = Formation::all();
        $formations = $formations->sortBy('name');
        return view('cours',compact('courses','formations'));
    }
    public function etudiants(){
        return view('index');
    }
    public function promotions(){
        return view('promotions');
    }
    public function finances(){
        return view('finances');
    }
    public function ajouter(){
        return view('index');
    }
    public function math(){
        return view ('math');
    }
    public function education(){
        return view('educationFinanciere');
    }

}
