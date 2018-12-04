<?php

namespace App\Http\Controllers;

use Stichoza\GoogleTranslate\TranslateClient;
use Illuminate\Http\Request;
use Response;
use App\Slider;
use App\Gallery;
use App\RoomType;
class PageController extends Controller
{
    public function __construct(Request $request){
    }
    public function index(){
        $sliders  = Slider::get();
    	$rooms  = RoomType::where('status_id', 1)->get();
    	return view('page.index', compact('sliders', 'rooms'));
    }

    public function rooms()
    {
        $rtypes = RoomType::where('status_id', 1)->get();
    	return view('page.rooms', compact('rtypes'));
    }

    public function roomReadMore( $id )
    {
        $rtype = RoomType::find($id);
        $related = RoomType::where('id', '!=', $id)->inRandomOrder()->take(2)->get();
        return view('page.pageDetails', compact('rtype', 'related'));
    }

    public function gallery()
    {
    	$gallery  = Gallery::paginate(21);
    	return view('page.gallery', compact('gallery'));
    }

    public function newsAndEvents()
    {
    	return view('page.newsandevents');
    }

    public function contact()
    {
    	return view('page.contact');
    }

    public function about()
    {
    	return view('page.about');
    }
}
