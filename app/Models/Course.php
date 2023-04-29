<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public static function findOrFail(int $int)
    {
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');
    }
    public static function applyPromotion($discountPercentage)
    {
        // Apply the promotion to all courses
        Course::where('reduced_price', null)->update(['reduced_price' => DB::raw('price * ' . (1 - $discountPercentage/100))]);
    }

    use HasFactory;
}
