<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function supervisor () {
        return $this->belongsTo('App\Models\Supervisor'); // rooms.supervisor_id -> supervisors.id
    }


    // rooms: id, building, capacity, number, supervisor_id

    // Room M-1 Supervisor
}
