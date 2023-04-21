<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class RouteController extends Controller
{
    public function index(){
        $posts=Student::all();
        return view('index',compact('posts'));
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function formations(){
        return view('cours');
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
