<?php

namespace App\Http\Controllers;

use App\ScheduledFlight;
use App\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ScheduledFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::all();

        $source = Input::get('source');
        $dest = Input::get('dest');
        $dept_date = Input::get('dept_date');
        // dd($source);
        $schedules = ScheduledFlight::where([['source',$source],['dest',$dest],['dod',$dept_date],['status','<>','CANCELLED']]);
        return view('home',compact('airports','schedules'));
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
     * @param  \App\ScheduledFlight  $scheduledFlight
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduledFlight $scheduledFlight)
    {
        return view('booking.book',compact('scheduledFlight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduledFlight  $scheduledFlight
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduledFlight $scheduledFlight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduledFlight  $scheduledFlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduledFlight $scheduledFlight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduledFlight  $scheduledFlight
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduledFlight $scheduledFlight)
    {
        //
    }
}
