@extends('./dashboard.master')
@section('title' , 'edit service')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Edit Service</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.services.update',$service->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')?old('name'): $service->name??''}}">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                           <div class="form-floating mb-3">
                         <textarea class="form-control " placeholder="Leave a description here" id="floatingTextarea" name="description">{{old('description')?old('description'): $service->description??''}}</textarea>
                         <label for="floatingTextarea">Description</label>
                          @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           </div>
                            <div class="form-group mb-3">
                                <label for="logo"> Image</label>
                                <input type="file" class="form-control" id="logo" name="image" >
                                 @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror

                                <img src="{{asset($service::PATH.$service->image)}}" style="height:100px;width:100px">

                              
                         
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