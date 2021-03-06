<?php

namespace App\Http\Controllers;

use App\LoyaltyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoyaltyProfileController extends Controller
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

        $loyalty_profiles = LoyaltyProfile::all();
        return view("loyalty_profiles.create", compact("loyalty_profiles"));
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
     * @param  \App\LoyaltyProfile  $loyaltyProfile
     * @return \Illuminate\Http\Response
     */
    public function show(LoyaltyProfile $loyaltyProfile)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoyaltyProfile  $loyaltyProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(LoyaltyProfile $loyaltyProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoyaltyProfile  $loyaltyProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoyaltyProfile $loyaltyProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoyaltyProfile  $loyaltyProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoyaltyProfile $loyaltyProfile)
    {
        //
    }

    public function get_my_profile()
    {
        //
        // $id = Auth::id();
        $id = 1;
        $profile = LoyaltyProfile::where('customer_id',$id)->get();//dd($profile);
        return view("loyalty_profiles.home", compact('profile'));
    }

}
