@extends('./dashboard.master')
@section('title' , 'add project')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Add Project</h2>
        <div class="row w-100 ">
            <div class="col-lg-6  p-0 ">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.projects.store')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')?old('name'):''}}"   >
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="logo"> Image</label>
                                <input type="file" class="form-control" id="image" name="image" value="{{old('image')?old('image'):''}}"   >
                                 @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                             <div class="form-group mb-3">
                             <label for="logo"> Description</label>
                         <textarea class="form-control " placeholder="Leave a description here" id="floatingTextarea" name="description">
                         {{old('description')?old('description'):''}}
                         </textarea>
                    
                          @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           </div>
                            <div class="form-group mb-3">
                                <label for="service"> Service</label>
                                <select class="form-control" id="service" name="service_id" >
                                    <option disabled selected>Select Service</option>
                                    @foreach ( $services as $service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    
                                    @endforeach
                                     @error('service_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                    
                                </select>
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