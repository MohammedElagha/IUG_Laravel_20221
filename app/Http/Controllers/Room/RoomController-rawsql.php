<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomControllerrawsql extends Controller
{
    public function create () {
        return view('rooms.create');
    }

    public function store (Request $request) {
        $building_name = $request->input('building');
        $room_number = $request->input('number');
        $capacity = $request->input('capacity');

        /*
        1. database connection
        2. sql query
        3. exec sql query
        4. result
        */

        $query = "insert into rooms (building, number, capacity)
                    values ('$building_name', $room_number, $capacity)";


        // dd($query);

        $result = DB::insert($query);

        return redirect()->back();
    }


    public function index () {
        $query = "select * from rooms";
        $rooms = DB::select($query);

        /*
        [
        ['capacity' => 85, 'number' => 104],[],[]
        ]

        foreach(rooms) -> room['capacity']
        foreach(rooms) -> room->capacity
        */

        // dd($rooms);

        return view('rooms.index')->with('rooms', $rooms);
    }


    public function update (Request $request, $id) {
        $building_name = $request->input('building');
        $room_number = $request->input('number');
        $capacity = $request->input('capacity');

        /*
        1. database connection
        2. sql query
        3. exec sql query
        4. result
        */

        $query = "update rooms set building = '$building_name',
                                    number = $room_number,
                                    capacity = $capacity
                    where id = $id";


        $result = DB::update($query);

        return redirect()->back();
    }

    public function edit ($id) {
        $query = "select * from rooms where id = $id limit 1";
        $data = DB::select($query);     # array of object/s
        $room = $data[0];
        return view('rooms.edit')->with('id', $id)->with('room', $room);
    }

}
