<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function registered_courses () {
        return $this->hasMany('App\Models\RegisteredCourse');
    }

    # Course 1-M RegisteredCourse
}
