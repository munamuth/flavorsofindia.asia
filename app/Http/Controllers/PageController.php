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

    public function specialOffer()
    {
    	return view('page.specialOffer');
    }

    public function menu( )
    {
        return view('page.menu');
    }

    public function gallery()
    {
    	$gallery  = Gallery::paginate(21);
    	return view('page.gallery', compact('gallery'));
    }

    public function branches()
    {
    	return view('page.branches');
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
