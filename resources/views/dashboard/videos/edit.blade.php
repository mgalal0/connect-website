@extends('./dashboard.master')
@section('title' , 'edit video')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Update Video</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.videos.update',$video->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                           
                            <div class="form-group mb-3">
                                <label for="vidoe"> Upload Video</label>
                                <input type="file" class="form-control" id="vidoe" name="video" >
                                 @error('video')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror


                                <video controls width="200" height="200">
        <source src="{{ asset($video::PATH . $video->video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
                            </div>
                          
                            <button type="submit" class="btn ">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')