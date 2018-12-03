<?php

namespace App\Http\Controllers;

use App\RoomTypePhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
class RoomTypePhotoController extends Controller
{
    public static function saveRoomTypePhoto($roomId, $photos)
    {
        foreach( $photos as $key => $photo)
        {
            
            $photoId = PhotoController::savePhoto($photo);
            RoomTypePhoto::insert(['room_type_id' => $roomId, 'photo_id' => $photoId
            ]);
        }
    }
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
    public function store(Request $request, $photos)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomTypePhoto  $roomTypePhoto
     * @return \Illuminate\Http\Response
     */
    public function show(RoomTypePhoto $roomTypePhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomTypePhoto  $roomTypePhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomTypePhoto $roomTypePhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomTypePhoto  $roomTypePhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomTypePhoto $roomTypePhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomTypePhoto  $roomTypePhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomTypePhoto $roomTypePhoto)
    {
        //
    }
}
