<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        // dd($request);
        $request->validate([
            'user_id' => 'integer|required',
            'room_id' => 'integer|required',
            'type' => 'string|required',
            'description' => 'string|required|max:255'
        ]);
        Order::create($request->all());

        return Redirect::route('dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $order = Order::find($request->id);
        $request->validate([
            'type' => 'string|required',
            'description' => 'string|required|max:255'
        ]);
        $order->description = $request->description;
        $order->type = $request->type;
        $order->save();

        return Redirect::route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $order = Order::find($request->id);
        $order->delete();

        return Redirect::route('dashboard');
    }
}
