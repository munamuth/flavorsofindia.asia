<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RoomTypePhotoController;
use App\Photo;
use App\RoomTypePhoto;
use Illuminate\Http\Request;
use Image;
use Storage;
use Carbon\Carbon;
class PhotoController extends Controller
{
    /*
    * @return id;
    */

    public static function savePhoto($photo)
    {
        $path = $photo->store('/rtype');
        // open file a image resource
        $img = Image::make('storage/'.$path);

        // crop image
        $img->fit(800, 500);
        $img->save('storage/'.$path);
        $rtPhoto = new Photo(); 
        $rtPhoto->name = $path;
        $rtPhoto->save();
        return $rtPhoto->id;
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
    public function store(Request $request)
    {
        echo $id = $request->id;
        $photos = $request->file;
        RoomTypePhotoController::saveRoomTypePhoto($id, $photos);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
         echo "shwo";
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        echo "edit";
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $file = $request->file;
        if( $request->hasFile('file') ){
            echo Storage::delete($photo->name);
            $path = $file->store('/rtype');
                // open file a image resource
                $img = Image::make('storage/'.$path);

                // crop image
                $img->fit(800, 500);
                $img->save('storage/'.$path);
               $photo->update(['name' => $path,'photo' => $path, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);

        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo, Request $request)
    {
        try{
            RoomTypePhoto::where('photo_id', $photo->id)->delete();
            $photo->delete();
            $request->session()->flash('status', 'Success');
        } catch (\Exception $e) {
                    echo $e;
            return $e->getMessage();
        }
        return back();
    }
}
