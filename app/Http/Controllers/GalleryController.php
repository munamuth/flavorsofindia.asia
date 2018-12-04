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
            
            $imageName = ImageUpload::imageUpload('public/node_modules/image/gallery', $f, 600, 500);
                
                Gallery::insert(['name' => $imageName,'photo' => $imageName, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
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
            $imageName = ImageUpload::imageUpload('public/node_modules/image/gallery', $request->file, 600, 500);
            Gallery::where('id', $gallery->id)->update(['name' => $imageName,'photo' => $imageName, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
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
