<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;




class ReservationsController extends Controller
{
    //

    public function index(Request $request)
    {
        //
        $reservations =  Reservation::all();


        return view('website.reservations', compact('reservations'));

      }





    // public function reservationsearch(Request $request)
    // {
    //     $articles = Article::where('company', 'LIKE', "%{$request->reservationsearch}%")->get();

    //     return view('data');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
       


        $reservation = new Reservation;
        $reservation->checkinDate = $request->input('checkinDate');
        $reservation->checkoutDate = $request->input('checkoutDate');
        $reservation->numAdults = $request->input('numAdults');
        $reservation->numChildren = $request->input('numChildren');
        // $reservation->name = $request->input('name');
        // $reservation->email = $request->input('email');
        // $reservation->address = $request->input('address');
        // $reservation->dateofbirth = $request->input('dateofbirth');
        // $reservation->gender = $request->input('gender');


       
        $reservation->save();
        return redirect()->route('data', $reservation->id);



    }

   
    public function edit($id)
    {
        //
    }

    

    
}
