<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FormationController extends Controller
{

    public function create()
    {
        return view('formations.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $category = $request->input('category');
        $teacher_name = $request->input('teacher_name');
        $day = request('day');
        $hour = request('hour');
        $minute = request('minute');
        $date_and_time1 = Carbon::parse($day)->setTime($hour, $minute);
        $date_and_time = $date_and_time1->format('l g:i A');
        $price = $request->input('price');

        $formation = new Formation();
        $formation->name = $name;
        $formation->category = $category;
        $formation->teacher_name = $teacher_name;
        $formation->date_and_time = $date_and_time;
        $formation->price = $price;
        $formation->save();

        return redirect()->route('page.formations');
    }




}
