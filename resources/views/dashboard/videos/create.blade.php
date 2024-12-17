@extends('./dashboard.master')
@section('title' , 'add video')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Add Video</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.videos.store')}}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group mb-3">
                                <label for="vidoe"> Upload Video</label>
                                <input type="file" class="form-control" id="vidoe" name="video" >
                                 @error('video')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                          
                            <button type="submit" class="btn ">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')