<?php

namespace App\Http\Controllers;

use Stichoza\GoogleTranslate\TranslateClient;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use App\Slider;
use App\Gallery;
use App\About;
use App\Menu;
use App\branch;
use App\history;
use App\special;
use App\review;
class PageController extends Controller
{
    public function __construct(Request $request){
    }
    public function index(){
        $sliders  = Slider::get();
        $history = history::find(1);
        $review = review::take(6)->get();
    	return view('page.index', compact('sliders', 'history', 'review'));
    }

    public function specialOffer()
    {
        $special = special::find(1);
    	return view('page.specialOffer', compact("special"));
    }

    public function menu( )
    {
        $menu = Menu::get();
        return view('page.menu', compact("menu"));
    }

    public function gallery()
    {
    	$gallery  = Gallery::paginate(21);
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
    	return view('page.gallery', compact('gallery', "year"));
    }

    public function branches()
    {
        $branches = branch::get();
    	return view('page.branches', compact("branches"));
    }

    public function contact()
    {
    	return view('page.contact');
    }

    public function about()
    {
        $about = About::find(1);
    	return view('page.about', compact('about'));
    }
}
