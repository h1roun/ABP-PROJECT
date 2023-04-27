<?php

namespace App\Models;

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

    use HasFactory;
}
