<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with(['photos', 'amenity'])->get();
        return view('index', ['rooms' => $rooms]);
    }

    public function roomIndex()
    {
        $rooms = Room::with(['photos', 'amenity'])->get();
        
        return view('rooms', ['rooms' => $rooms]);
    }

    public function offers()
    {
        $rooms = Room::offers();
        $popular = Room::popular();
        return view('offers', ['rooms' => $rooms, 'popular' => $popular]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('room_details', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
