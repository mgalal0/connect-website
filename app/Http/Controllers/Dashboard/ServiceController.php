<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::latest()->paginate(5, ['id', 'name', 'description', 'image']);

        return view('dashboard.services.index', ['services' => $services]);
    }

    public function create()
    {
        return view('dashboard.services.create');
    }
    public function store(ServiceRequest $request)
    {
        $image = uploadImage($request->image, Service::PATH);
        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        if ($service) {
            toast('Your service has been submited!', 'success');
        } else {
            Alert::error('error ', 'Success Message');
        }
        return redirect()->back();
    }


    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }



    public function update(ServiceRequest $request, Service $service)
    {

        $image = $service->image;
        if ($request->file('image')) {
            deleteImage($image, Service::PATH);
            $image = uploadImage($request->image, Service::PATH);
        }
        $service = $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($service) {
            toast('Your service has been updated successfully!', 'success');
        } else {
            toast('error ', 'error');
        }
        return redirect()->back();
    }


    public function destroy(Service  $service)
    {
        $image = $service->image;
        $service = $service->delete();
        if ($service == true) {
            deleteImage($image, Service::PATH);
            toast('deleted!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}
