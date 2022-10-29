<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';


    public function registered_courses () {
        return $this->hasMany('App\Models\RegisteredCourse' /* , foriegn key name, primary key name */);

        # registered_courses.student_id -> students.id
    }

    # Student 1-M RegisteredCourse
}
