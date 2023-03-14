<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class FrontdeskController extends Controller
{
    //transaction 

    function getData(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Address' => 'required',
            'DateofBirth' => 'required',
            'gender' => 'required',
            // 'Adult#' => 'required',
            // 'Children#' => 'required',
            // 'CheckinDate' => 'required',
            // 'CheckoutDate' => 'required'



        ]);
       
        return view('frontdesk.Transactions.addcustomers2', compact('request'));
    }
    function getData1(Request $request)
    {
        $request->validate([
            
            'Adult#' => 'required',
            'Children#' => 'required',
            'CheckinDate' => 'required',
            'CheckoutDate' => 'required'



        ]);
       
        return view('frontdesk.Transactions.addcustomers2', compact('request'));
    }
   

   
    public function expireguest()
    {
        //
        return view('frontdesk.Transactions.expireguest');
    }
    public function addcustomers()
    {
        //
        return view('frontdesk.Transactions.addcustomers');
    }
    public function addcustomers2()
    {
        //
        return view('frontdesk.Transactions.addcustomers2');
    }

    //services
    public function room()
    {
        //
        return view('frontdesk.Services.room');
    }
    
    public function roomtype()
    {
        //
        return view('frontdesk.Services.roomtype');
    }
    public function roomstatus()
    {
        //
        return view('frontdesk.Services.roomstatus');
    }

    //accounts
    public function customers()
    {
        //
        return view('frontdesk.Accounts.customer');
    }
//     public function users()
//     {
//         //
//         return view('frontdesk.Accounts.user');
//     }
// }
}
