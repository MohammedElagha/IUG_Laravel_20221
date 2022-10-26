<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervisorController extends Controller
{
    public function index () {
        $supervisors = Supervisor::with(['rooms', 'rooms.sector'])->select('id', 'name')->get(); // select('*')->get()
        // dd($supervisors->toArray());
        return view('supervisors.index')->with('supervisors', $supervisors);
    }
}
