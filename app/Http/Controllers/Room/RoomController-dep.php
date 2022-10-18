<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomControllerDep extends Controller
{
    public function create () {
        return view('rooms.create')->with('id', 55);
    }

    public function store (Request $request, $id) {
        $building_name = $request->input('building');
        $room_no = $request->input('number');
        $capacity = $request->input('capacity', 65);

        $lang = $request->input('lang');
        $timezone = $request->input('timezone');

        # $_GET , $_POST , $_REQUEST


        $lang = request('lang');

        ############

        # GET
        $lang = $request->param('lang');

        # post
        $lang = $request['capacity'];

        # header
        $user_agent = $request->header('User-Agent');

        ##############################

        # handle something

        ##############################

        // return redirect('room/create');
        return redirect()->back();

    }
}
