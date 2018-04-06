<?php

namespace App\Http\Controllers;

use App\Booking;
use App\ScheduledFlight;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scheduledFlight =json_decode($request->flight[0]);
        // dd($scheduledFlight);
        $economy = (int)$request->economy;
        $firstclass = (int)$request->firstclass;
        $business = (int)$request->business;
        $price = (ScheduledFlight::where('id',$scheduledFlight->id)->first())->price;
        $total = $economy * $price + $firstclass * ($price +200) +$business *($price + 500);
        // dd($total);
        return view('booking.pay',compact('scheduledFlight','business','economy','firstclass','total'));

        // dd($flight->plane_id);
        // DB::transaction(function()
        // {
        //     $newAcct = Account::create([
        //         'accountname' => Input::get('accountname')
        //     ]);

        //     $newUser = User::create([
        //         'username' => Input::get('username'),
        //         'account_id' => $newAcct->id,
        //     ]);
        // });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
