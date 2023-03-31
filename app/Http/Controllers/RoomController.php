<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function room(Request $request)
    {
        //
        $rooms = Room::all();

        return view('frontdesk.Services.room', ['rooms' => $rooms]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function available(Request $request)
{
    // Get the form data
    $checkinDate = $request->input('checkinDate');
    $checkoutDate = $request->input('checkoutDate');
    $numAdults = $request->input('numAdults');
    $numChildren = $request->input('numChildren');

    // Perform query to find available rooms based on form data
    $availableRooms = Room::whereDoesntHave('reservations', function($query) use ($checkinDate, $checkoutDate) {
        $query->where(function($query) use ($checkinDate, $checkoutDate) {
            $query->where('checkin_date', '<', $checkoutDate)
                  ->where('checkout_date', '>', $checkinDate);
        });
    })
    ->where('max_occupancy', '>=', $numAdults + $numChildren)
    ->get();

    // Return a view with the available rooms
    return view('rooms.available', [
        'availableRooms' => $availableRooms,
    ]);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $room = new Room;
        $room->RoomNumber = $request->input('RoomNumber');
        $room->Status = $request->input('Status');
        $room->Type = $request->input('Type');
        $room->Capacity = $request->input('Capacity');
        $room->Price = $request->input('Price');
        $room->Action  = $request->input('Action');
      

        $room->save();

    return redirect()->route('room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
