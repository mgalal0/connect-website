<?php

namespace App\Http\Controllers\Front;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Video;

class HomeController extends Controller
{


    function landing()
    {
$video=Video::first(['video','id']);

        $services = Service::get(['name', 'image', 'description']);
        $partners = Partner::get(['logo']);
        return view('front.landing', compact('services', 'partners','video'));
    }


    
    function service()
    {


        $services=Service::get(['name']);
        return view('front.services',compact('services'));
    }

    function gallery()
    {

        $galleries=Gallery::paginate(7 ,['name', 'image', 'description','id']);
        // dd($services[0]->projects[0]);
        return view('front.gallery',compact('galleries'));
    }
}
