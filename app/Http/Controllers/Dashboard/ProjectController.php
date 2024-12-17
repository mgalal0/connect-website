<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('service:id,name')->latest()->paginate(5, ['id', 'name', 'description', 'image','service_id']);

        return view('dashboard.projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        $services=Service::get(['id','name']);
        return view('dashboard.projects.create',compact('services'));
    }
    public function store(ProjectRequest $request)
    {
        $image = uploadImage($request->image, Project::PATH);
        $project = project::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'service_id'=>$request->service_id
        ]);
        if ($project) {
            toast('Your project has been submited!', 'success');
        } else {
            Alert::error('error ', 'Success Message');
        }
        return redirect()->back();
    }


    public function edit(Project $project)
    {
        $services=Service::get(['id','name']);
        return view('dashboard.projects.edit', compact('project','services'));
    }

    public function update(ProjectRequest $request, Project $project)
    {

        $image = $project->image;
        if ($request->file('image')) {
            deleteImage($image, Project::PATH);
            $image = uploadImage($request->image, Project::PATH);
        }
        $project = $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'service_id'=>$request->service_id
        ]);
        if ($project) {
            toast('Your project has  been updated successfully!', 'success');
        } else {
            toast('error ', 'error');
        }
        return redirect()->back();
    }


    public function destroy(Project  $project)
    {
        $image = $project->image;
        $project = $project->delete();
        if ($project == true) {
            deleteImage($image, Project::PATH);
            toast('deleted!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}
   

