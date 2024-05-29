<?php

namespace App\Http\Controllers;

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
            'check_in' => 'required|date|after:date',
            'check_out' => 'required|date|after:check_in',
            'notes' => 'required|string|max:255',
            'room_id' => 'required|integer'
        ]);
    }
}
