<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use Storage;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::get();
        return view('admin.gallery.index', compact('gallery'));
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
       $file = $request->file;
        if( $request->hasFile('file') ){
            foreach( $file as $f ){
                $path = $f->store('/gallery');
                // open file a image resource
                $img = Image::make('storage/'.$path);

                // crop image
                $img->fit(600, 500);
                $img->save('storage/'.$path);
                Gallery::insert(['name' => $path,'photo' => $path, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
            }
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $file = $request->file;
        if( $request->hasFile('file') ){
            echo Storage::delete($gallery->name);
            $path = $file->store('/gallery');
                // open file a image resource
                $img = Image::make('storage/'.$path);

                // crop image
                $img->fit(600, 500);
                $img->save('storage/'.$path);
                Gallery::where('id', $gallery->id)->update(['name' => $path,'photo' => $path, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        echo Storage::delete($gallery->name);
        $gallery->delete();

        return back();
    }
}
