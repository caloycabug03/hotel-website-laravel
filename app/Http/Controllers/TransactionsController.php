<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function customers(Request $request)
     {
        $transactions =  Transaction::all();

        return view('frontdesk.Accounts.customer' , compact('transactions' ));
     }
  
    public function activeguest(Request $request)
    {
        //      $request->validate([
        //     'Name' => 'required',
        //     'Email' => 'required',
        //     'Address' => 'required',
        //     'DateofBirth' => 'required',
        //     'Gender' => 'required',
        //     'AdultNum' => 'required',
        //     'ChildrenNum' => 'required',
        //     'CheckinDate' => 'required',
        //     'CheckoutDate' => 'required',
        //     'RoomType' => 'required',
        //     'Price' => 'required',

        // ]);
        
        $transactions =  Transaction::all();

        return view('frontdesk.Transactions.activeguest' , compact('transactions' ));

    }

    // public function validate(Request $request)
    // {
    //     $request->validate([
    //         'Name' => 'required',
    //         'Email' => 'required',
    //         'Address' => 'required',
    //         'DateofBirth' => 'required',
    //         'Gender' => 'required',
    //         'AdultNum' => 'required',
    //         'ChildrenNum' => 'required',
    //         'CheckinDate' => 'required',
    //         'CheckoutDate' => 'required',
    //         'RoomType' => 'required',
    //         'Price' => 'required',

    //     ]);
    //     return view ('frontdesk.Transactions.activeguest' , compact('request'));
    

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    
            $transaction = new Transaction;
            $transaction->Name = $request->input('Name');
            $transaction->Email = $request->input('Email');
            $transaction->Address = $request->input('Address');
            $transaction->DateofBirth = $request->input('DateofBirth');
            $transaction->Gender = $request->input('Gender');
            $transaction->AdultNum  = $request->input('AdultNum');
            $transaction->ChildrenNum = $request->input('ChildrenNum');
            $transaction->CheckinDate = $request->input('CheckinDate');
            $transaction->CheckoutDate = $request->input('CheckoutDate');
            $transaction->RoomType = $request->input('RoomType');
            $transaction->Price = $request->input('Price');

            $transaction->save();

        return redirect()->route('activeguest');

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
