<?php

namespace App\Http\Controllers;

use App\LoyaltyType;
use Illuminate\Http\Request;

class LoyaltyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loyalties = LoyaltyType::where("status",'active')->get();
        return view("loyaltyt.index", compact("loyalties"));
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
     * @param  \App\LoyaltyType  $loyaltyType
     * @return \Illuminate\Http\Response
     */
    public function show(LoyaltyType $loyaltyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoyaltyType  $loyaltyType
     * @return \Illuminate\Http\Response
     */
    public function edit(LoyaltyType $loyaltyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoyaltyType  $loyaltyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoyaltyType $loyaltyType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoyaltyType  $loyaltyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoyaltyType $loyaltyType)
    {
        //
    }
}
