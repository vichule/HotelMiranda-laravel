<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
            'notes' => 'nullable|string|max:255',
            'room_id' => 'required|integer|exists:rooms,id'
        ]);

        $checkIn = $request->check_in;
        $checkOut = $request->check_out;
        $roomId = $request->room_id;

        $availableRooms = Room::roomAvailability($checkIn, $checkOut);
        $isAvailable = $availableRooms->contains('id', $roomId);

        if (!$isAvailable) {
            return redirect()->back()->with('error', 'The room is not available for the selected dates.');
        }

        Booking::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'order_date' => now(),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'notes' => $request->notes,
            'room_id' => $roomId
        ]);

        return redirect()->back()->with('success', 'Booking done successfully.');
    }
}
