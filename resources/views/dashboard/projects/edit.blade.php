@extends('./dashboard.master')
@section('title' , 'edit project')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Add Partener</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.projects.update',$project->id)}}"  enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')?old('name'): $project->name??''}}">
                                  @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="image"> image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                                  @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                <img src="{{asset($project::PATH.$project->image)}}" style="width:100px;height:100px">
                            </div>

                             <div class="form-floating mb-3">
                         <textarea class="form-control " placeholder="Leave a description here" id="floatingTextarea" name="description">
                            {{old('description')?old('description'): $project->description??''}}</textarea>
                         <label for="floatingTextarea">Description</label>
                          @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           </div>
                            <div class="form-group mb-3">
                                <label for="service"> Service</label>
                                <select class="form-control" id="service" name="service_id" >
                                    <option disabled >Select Service</option>
                                    @foreach ( $services as $service)
                                <option value="{{$service->id}}"   {{$project->service_id==$service->id?'selected':''}}>{{$service->name}}</option>
                                    
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