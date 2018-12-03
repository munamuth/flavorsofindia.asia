<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;
use App\Facility;
use App\RoomFacility;
use App\Http\Controllers\RoomTypePhotoController;
class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rTypes = RoomType::get();
        //dd($rTypes);
        return view('admin.room.roomType.index', compact('rTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = Facility::get();
        return view('admin.room.roomType.create', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $facilities = $request->facility;
        $files = $request->file;
        $rtype = new RoomType();
        $rtype->name = $name;
        $rtype->description = $description;
        if( $rtype->save() )
        {
            foreach( $facilities as $f )
            {
                if( !empty($f) )
                {
                    RoomFacility::insert( [ "room_type_id" => $rtype->id, "facility_id" => $f] );
                    
                }
            }

            if( !empty($files) ){
                RoomTypePhotoController::saveRoomTypePhoto($rtype->id, $files );
            } else {
                echo 'no file';
            }
            $request->session()->flash('status', "Success R");
        }
        else 
        {
            $request->session()->flash('status', "Failed");
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $roomType)
    {
        $facilities = Facility::get();/*
        dd( $roomType->getRoomFacility );
        die();*/
        return view('admin.room.roomType.edit', compact('roomType', 'facilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        $update = $roomType->update($request->except('_token', '_method'));
        RoomFacility::where('room_type_id', $roomType->id)->delete();
        $facility = $request->facility;
        if( !empty($facility) ){
            foreach($facility  as $f ){
                RoomFacility::insert( [ "room_type_id" => $roomType->id, "facility_id" => $f] );
            }  
        }        

        if( $update ){
            $request->session()->flash('status', 'Success');
        } else {
            $request->session()->flash('status', 'Failed');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        //
    }
}
