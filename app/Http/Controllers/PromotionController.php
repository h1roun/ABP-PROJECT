<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Course;


class PromotionController extends Controller
{
    public function store(Request $request)
    {
        // create the promotion
        $promotion = new Promotion();
        $promotion->name = $request->input('name');
        $promotion->discount_percentage = $request->input('discount_percentage');
        $promotion->save();

        // apply the promotion to all courses
        Course::applyPromotion($promotion->discount_percentage);

        return redirect()->back();
    }
}
