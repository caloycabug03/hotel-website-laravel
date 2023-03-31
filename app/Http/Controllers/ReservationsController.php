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
        // Validate the form data
        $validatedData = $request->validate([
            'checkinDate' => 'required|date',
            'checkoutDate' => 'required|date|after:checkinDate',
            'numAdults' => 'required|integer|min:1|max:9',
            'numChildren' => 'required|integer|min:0|max:9',
        ]);
    
        // Process the form data
        // ...
    
        // Redirect the user to a thank you page
        return redirect()->route('thankyou');
    }
    

    

   
    public function edit($id)
    {
        //
    }

    

    
}
