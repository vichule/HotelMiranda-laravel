<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function roomIndex()
    {
        $rooms = Room::with(['photos', 'amenity'])->get();
        return view('index', ['rooms' => $rooms]);
    }

    public function index(Request $request)
    {
        $check_in = $request->input('arrival');
        $check_out = $request->input('departure');

        if ($check_in && $check_out) {
            $rooms = Room::roomAvailability($check_in, $check_out);
        } else {
            $rooms = Room::with(['photos', 'amenity'])->get();
        }

        return view('rooms', ['rooms' => $rooms]);
    }

    public function offers()
    {
        $rooms = Room::offers();
        $popular = Room::popular();
        return view('offers', ['rooms' => $rooms, 'popular' => $popular]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $related = Room::related();
        return view('room_details', ['room' => $room, 'related' => $related]);
    }

}
