<?php

namespace App\Http\Controllers\Front;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ProjectController extends Controller
{




    function index()
    {
        $services=Service::oldest()->get(['name','id']);
        $service = Service::first();
        $service = $service->name;
        $projects = Project::whereHas('service', function ($query) use ($service) {
            $query->where('name', $service);
        })->paginate(15,['image', 'id']);
        return view('front.projects', compact('projects','services'));
    }



public function filter($service){
    $projects = Project::whereHas('service', function ($query) use ($service) {
        $query->where('id', $service);
    })->paginate(15,['image', 'id','name']);
    return view('front.project-partials', compact('projects'));

}


}
