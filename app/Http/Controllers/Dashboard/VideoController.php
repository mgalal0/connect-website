<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    function index()
    {
        $videos = Video::paginate(5, ['id', 'video']);
        return view('dashboard.videos.index', compact('videos'));
    }


    function create()
    {

        return view('dashboard.videos.create');
    }



    function store(VideoRequest $request)
    {

        $video = Video::create([
            'video' => uploadImage($request->video, Video::PATH)
        ]);
        if ($video) {
            toast('video uploaded successfully!', 'success');
        } else {
            toast('upload failed!', 'error');
        }
        return redirect()->back();
    }


    function edit(Video $video)
    {
        return view('dashboard.videos.edit', compact('video'));
    }
    function update(VideoRequest $request, Video $video)
    {
        $video_name = $video->image;
        if ($request->file('video')) {
            deleteImage($video_name, Video::PATH);
            $video_name = uploadImage($request->video, video::PATH);
        }
        $video = $video->update([
            'video' => $video_name
        ]);

        if ($video) {
            toast('updated successfully', 'success');
        } else {
            toast('error ', 'error');
        }
        return redirect()->back();
    }




    public function destroy(Video $video)
    {
        $video_name = $video->video;
        $veideo = $video->delete();
        if ($veideo == true) {
            deleteImage($video_name, Video::PATH);
            toast('deleted!', 'success');
        } else {
            toast('failed ', 'error');
        }
        return redirect()->back();
    }
}