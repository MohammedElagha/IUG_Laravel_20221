<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisteredCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function student () {
        return $this->belongsTo('App\Models\Student');
    }

    public function course () {
        return $this->belongsTo('App\Models\Course');
    }

    # RegisteredCourse M-1 Course
    # RegisteredCourse M-1 Student
}
