<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function get_profile () {
        $name = "Ahmed";
        $salary = 500;

        return view('teacher.profile')->with('emp_name', $name)->with('salary', $salary);
    }

    public function get_timetable () {
        return view('teacher.timetable');
    }

    public function search_rooms ($building, $number) {
        $search_key = $building;

        $rooms = [
            ['number' => '102', 'building' => 'K', 'capacity' => 200],
            ['number' => '112', 'building' => 'K', 'capacity' => 200],
            ['number' => '214', 'building' => 'K', 'capacity' => 200],
            ['number' => '215', 'building' => 'I', 'capacity' => 200],
            ['number' => '302', 'building' => 'I', 'capacity' => 200],
            ['number' => '117', 'building' => 'I', 'capacity' => 200],
            ['number' => '317', 'building' => 'P', 'capacity' => 200],
            ['number' => '204', 'building' => 'P', 'capacity' => 200],
            ['number' => '517', 'building' => 'C', 'capacity' => 200],
            ['number' => '504', 'building' => 'C', 'capacity' => 200],
        ];

        $search_result = [];
        foreach ($rooms as $room) {
            if ($room['building'] == $search_key) {
                $search_result[] = $room;
            }
        }

        return view('teacher.search_rooms')->with('rooms', $search_result);
    }
}
