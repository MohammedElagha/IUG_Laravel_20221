<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Supervisor;

class RoomController extends Controller
{
    public function create () {
        $supervisors = Supervisor::get();
        return view('rooms.create')->with('supervisors', $supervisors);
    }

    public function store (Request $request) {
        $building_name = $request->input('building');
        $room_number = $request->input('number');
        $capacity = $request->input('capacity');
        $supervisor_id = $request->input('supervisor_id');

        // $query = "insert into rooms (building, number, capacity)
        //             values ('$building_name', $room_number, $capacity)";

        // $result = DB::insert($query);

        // $result = Room::insert(['building' => $building_name, 
        //                                         'number' => $room_number, 
        //                                         'capacity' => $capacity,
        //                                         'supervisor_id' => $supervisor_id]);

        $room = new Room;
        // $room->fill(['building' => $building_name, 
        //             'number' => $room_number, 
        //             'capacity' => $capacity,
        //             'supervisor_id' => $supervisor_id]);
        $room->building = $building_name;
        $room->capacity = $capacity;
        $room->number = $room_number;
        $room->supervisor_id = $supervisor_id;
        $room->save();

        return redirect()->back();
    }


    public function index () {
        // $query = "select * from rooms";
        // $rooms = DB::select($query);

        /*
		get()
		select()
		table()
        */

        /*
        rooms.supervisor_id -> supervisors.id
        */

        // stdClass

        // $rooms = Room::withTrashed()
        //         ->leftJoin('supervisors', 'rooms.supervisor_id', 'supervisors.id')
        //         ->select('rooms.*', 'supervisors.name as supervisor_name')
        // 		->get();

        $rooms = Room::withTrashed()->with(['supervisor', 'sector'])->get();

        // foreach ($rooms as $room) {
        //     $supervisor_id = $room->supervisor_id;
        //     $supervisor = Supervisor::find($supervisor_id);
        //     $room->supervisor = $supervisor;
        // }

        // dd($rooms);

        // collection of Room objects

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

        // $query = "update rooms set building = '$building_name',
        //                             number = $room_number,
        //                             capacity = $capacity
        //             where id = $id";

        // $result = DB::update($query);

        /*
		update()
		table()
		assoc array
		where()
        */

        // $result = Room::where('id', '=', $id)
		      //   ->update(['building' => $building_name, 'number' => $room_number, 'capacity' => $capacity]);

		// $room = Room::where('id', $id)->first();
		$room = Room::find($id);
		// $room->fill(['building' => $building_name, 
        //             'number' => $room_number, 
        //             'capacity' => $capacity,
        //             'supervisor_id' => $supervisor_id]);
        $room->building = $building_name;
        $room->capacity = $capacity;
        $room->number = $room_number;
        $room->supervisor_id = $supervisor_id;
        $room->save();
        
        return redirect()->back();
    }

    public function edit ($id) {
        // $query = "select * from rooms where id = $id limit 1";
        // $data = DB::select($query);     # array of object/s
        // $room = $data[0];

        /*
		get()
		select()
		table()
		where()
		limit()
        */

        $room = Room::select('*')
        		->where('id', $id)
        		->limit(1)
        		->first();

        // $room = $data[0];

        return view('rooms.edit')->with('id', $id)->with('room', $room);
    }

    public function destroy ($id) {
    	$result = Room::where('id', $id)
    				->delete();
        return redirect()->back();
    } 

    public function restore ($id) {
        $result = Room::where('id', $id)
                    ->restore();
        return redirect()->back();
    }


    public function test () {
    	$query = "select * from rooms
    				where (building = 'K' and capacity > 65)
    				or building = 'P'
    				 group by id 
    				 order by capacity ASC 
    				 limit 10";

    	$rooms = DB::table('rooms')
    			->where(function ($query) {
    				$query->where('building', 'K')
    						->where('capacity', '>', 65);
    			})
    			->orWhere('building', '=', 'P')
        		->select('*')
        		->groupBy('id')
        		->orderBy('capacity', 'DESC')
        		->limit(10)
        		->distict('id')
        		->get();

    }

}
