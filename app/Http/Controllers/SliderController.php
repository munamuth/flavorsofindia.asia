<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Carbon\Carbon;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('status_id', 1)->orderBy('updated_at', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('slider.create');
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
                $path = $f->store('/slider');
                // open file a image resource
                $img = Image::make('/public/storage/'.$path);

                // crop image
                $img->fit(800, 300);
                $img->save('/public/storage/'.$path);
                Slider::insert(['name' => $path,'status_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
            }
        }
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
       $file = $request->file;
        if( $request->hasFile('file') ){
            echo Storage::delete($slider->name);
            $path = $file->store('/slider');
                // open file a image resource
                $img = Image::make('/public/storage/'.$path);

                // crop image
                $img->fit(800, 300);
                $img->save('/public/storage/'.$path);
                Slider::where('id', $slider->id)->update(['name' => $path,'status_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now() ]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        echo Storage::delete($slider->name);
        $slider->delete();

        return back();
    }
}
