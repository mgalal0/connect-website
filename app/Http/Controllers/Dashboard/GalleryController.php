<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    //
    
    public function index()
    {
        $galleries = Gallery::latest()->paginate(5, ['id', 'name', 'description', 'image']);

        return view('dashboard.gallery.index', ['galleries' =>   $galleries]);
    }


    public function create()
    {
        return view('dashboard.gallery.create');
    }

    public function store(GalleryRequest $request)
    {
        $image = uploadImage($request->image, Gallery::PATH);
        $gallery = Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        if ($gallery) {
            toast('added successfully', 'success');
        } else {
            Alert::error('error ', 'Success Message');
        }
        return redirect()->back();
    }


    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', compact('gallery'));
    }



    public function update(GalleryRequest $request, Gallery $gallery)
    {

        $image = $gallery->image;
        if ($request->file('image')) {
            deleteImage($image, Gallery::PATH);
            $image = uploadImage($request->image, Gallery::PATH);
        }
        $gallery = $gallery->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($gallery) {
            toast(' updated successfully!', 'success');
        } else {
            toast('error ', 'error');
        }
        return redirect()->back();
    }


    public function destroy(Gallery  $gallery)
    {
        $image = $gallery->image;
        $gallery = $gallery->delete();
        if ($gallery == true) {
            deleteImage($image, Gallery::PATH);
            toast('deleted!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}

