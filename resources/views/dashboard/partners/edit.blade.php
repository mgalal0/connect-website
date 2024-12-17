@extends('./dashboard.master')
@section('title' , 'edit partner')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Edit Partner</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.partners.update',$partner->id)}}"  enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                  value="{{old('name')?old('name'): $partner->name??''}}">

                                  @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="logo"> Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" >
                                <img src="{{asset($partner::PATH.$partner->logo)}}" style="width:100px;height:100px">

                                @error('logo')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="service"> Service</label>
                                <select class="form-control" id="service" name="service_id" >
                                    <option disabled >Select Service</option>
                                    @foreach ( $services as $service)
                                <option value="{{$service->id}}"  
                                 {{$partner->service_id==$service->id?'selected':''}}>{{$service->name}}</option>
                                 @error('service')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                    
                                    @endforeach
                                    
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