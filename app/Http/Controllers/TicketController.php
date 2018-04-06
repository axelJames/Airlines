<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Airport;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        // $tickets = Ticket::all();\
        $status ="active";
        if (Input::has('type')) {
            $status = Input::get('type');
            // dd($status);
            if($status=='active'){
                $tickets =  Ticket::where('customer_id',$id);
                return view('ticket.index',compact('tickets'));
            }
            $tickets =  Ticket::where('customer_id',$id);
            return view('ticket.complete',compact('tickets'));
        }
        // dd($status);
        $tickets =  Ticket::where('customer_id',$id);
        return view('ticket.index',compact('tickets'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
