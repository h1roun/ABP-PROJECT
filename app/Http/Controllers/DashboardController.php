<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $courses = Student::all();
        return view('dashboard', ['courses' => $courses]);
    }
}
