<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Booking;
use App\Ticket;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        dd($request);
        $id = Auth::id();
        $flight = json_decode($request->flight);
        $business =(int)$request->business;
        $ecomony = (int)$request->ecomony;
        $firstclass = (int)$request->firstclass;

        DB::transaction(function()
        {
            $newPay = Payment::create([
                'cash' => $request->cash,
                'amount' => (float)$request->total,
                'bank' => $request->bank,
                'description'=> 'Ticket Booking',
            ]);

            $newBooking = Booking::create([
                'payment_id' => $newPay->id,
                'customer_id' => $id,
            ]);
            DB::select('exec Get_seat_list(?)',array($flight->id));
            $businessSeat = DB::table('Business_Seat')->take($business)->get();
            $ecomonySeat = DB::table('Economy_Seat')->take($ecomony)->get();
            $firstclassSeat = DB::table('Firstclass_Seat')->take($firstclass)->get();
            foreach ($businessSeat as $key => $value) {
                $newTicket = Ticket::create([
                    'booking_id' => $newBooking->id,
                    'customer_id' => $id,
                    'flight_id' => $flight->id,
                    'seat_id'=>$value->ID,
                ]);
            }
            foreach ($ecomonySeat as $key => $value) {
                $newTicket = Ticket::create([
                    'booking_id' => $newBooking->id,
                    'customer_id' => $id,
                    'flight_id' => $flight->id,
                    'seat_id'=>$value->ID,
                ]);
            }
            foreach ($firstclassSeat as $key => $value) {
                $newTicket = Ticket::create([
                    'booking_id' => $newBooking->id,
                    'customer_id' => $id,
                    'flight_id' => $flight->id,
                    'seat_id'=>$value->ID,
                ]);
            }
        });

        $tickets =  Ticket::where('customer_id',$id);
        return view('ticket.index',compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
