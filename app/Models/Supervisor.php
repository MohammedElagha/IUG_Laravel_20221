<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function rooms () {
        return $this->hasMany('App\Models\Room');
        # hasOne
    }

    # Supervisor 1-M Room
}
