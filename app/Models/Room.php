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

    public function sector () {
        return $this->belongsTo('App\Models\Sector');
    }

    // rooms: id, building, capacity, number, supervisor_id, sector_id

    // Room M-1 Supervisor

    # Room M-1 Sector
}
