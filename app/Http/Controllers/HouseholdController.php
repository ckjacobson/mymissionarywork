<?php

namespace App\Http\Controllers;

use App\household;
use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Household::all();
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
     * @param  \App\household  $household
     * @return \Illuminate\Http\Response
     */
    public function show(household $household)
    {
        return $household->load('member');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\household  $household
     * @return \Illuminate\Http\Response
     */
    public function edit(household $household)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\household  $household
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, household $household)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\household  $household
     * @return \Illuminate\Http\Response
     */
    public function destroy(household $household)
    {
        //
    }
}
