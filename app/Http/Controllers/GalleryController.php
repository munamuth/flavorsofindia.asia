<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Image;
use Storage;
use Date;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$gallery = Gallery::groupBy('created_at')
        ->get();*/
        /*$gallery = Gallery::select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupby('year','month')
            ->get();*/
        /*$gallery = Gallery::get()
                ->groupBy(function($val) {
                    $month = Carbon::parse($val->created_at)->format('m');
                    $year = Carbon::parse($val->created_at)->format('Y');
                    $month_year = array
                          (
                                  array("Volvo",22,18),
                                  array("BMW",15,13),
                                  array("Saab",5,2),
                                  array("Land Rover",17,15)
                          );
                return $month_year;

         });*/

        $start_year = 2018;
        $current_date =  Carbon::now();
        $current_year = $current_date->year;
        $current_month = $current_date->month;

        $year = array();
        $month = array();
        for($i = $current_year; $i >= $start_year; $i--)
        {
            if( $i == 2018 ){                
                array_push($month, 12);              
            } else if( $i == $current_year) {

                for($j = $current_month; $j >= 1; $j--){
                    if( $j < 10){
                        array_push($month, "0".$j);
                    } else {
                        array_push($month, $j);
                    }
                }

            } else {
                for($j = 12; $j >= 1; $j--){
                    if( $j < 10){
                        array_push($month, "0".$j);
                    } else {
                        array_push($month, $j);
                    }
                }  
            }

            array_push($year, ["year" => $i, "month" => $month]);
            $month = [];
        }
        return view('admin.gallery.index', compact('year'));
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
