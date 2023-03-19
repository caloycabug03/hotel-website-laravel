<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class BookingStepsController extends Controller
{
    //
    public function bookingSteps ()
    {
        return view ('website.bookingSteps');
    }
    public function bookingSteps2 ()
    {
        return view ('website.bookingSteps2');
    }
    public function bookingSteps3 ()
    {
        return view ('website.bookingSteps3');
    }
}
