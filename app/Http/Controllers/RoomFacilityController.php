<?php

namespace App\Http\Controllers;

use App\RoomFacility;
use Illuminate\Http\Request;

class RoomFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = RoomFacility::get();
        return view('admin.room.facility.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function show(RoomFacility $roomFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomFacility $roomFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomFacility $roomFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomFacility $roomFacility)
    {
        //
    }
}
