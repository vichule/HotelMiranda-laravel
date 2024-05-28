<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_type = Order::order_types();
        $order = Order::order();
        $rooms = Room::rooms();

        return view('dashboard', ['order' => $order, 'rooms' => $rooms, 'type' => $order_type]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'integer|required',
            'room_id' => 'integer|required',
            'type' => 'string|required',
            'description' => 'string|required'
        ]);
        Order::create($request->all());

        $order_type = Order::order_types();
        $order = Order::order();
        $rooms = Room::rooms();

        return view('dashboard', ['order' => $order, 'rooms' => $rooms, 'type' => $order_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        $order_type = Order::order_types();
        $order = Order::order();
        $rooms = Room::rooms();

        return view('dashboard', ['order' => $order, 'rooms' => $rooms, 'type' => $order_type]);
    }
}
