@extends('./dashboard.master')
@section('title' , 'display services')
@section('content')


<section class='parteners d-flex flex-column  w-100'>


<h2 class="text-center">Our Services</h2>

<div class="container ">

<div class="add-partener add-container  w-100  ">
<a href="{{route('dashboard.services.create')}}" class='add-btn'>Add New Service </a>
</div>
<div class="table-wrapper table-responsive">
<table class="table table-striped table-hover table-sm">
  <thead>
    <th>#</th>
    <th> Name</th>
    <th> Description</th>
    <th> Image</th>
    <th>Action</th>

  </thead>

  <tbody>
  @foreach ($services as $service )
    
 
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$service->name}}</td>
      <td>{{$service->description}}</td>
      <td> <img src="{{asset($service::PATH.$service->image)}}" style="width:100px;height:100px">
      </td>
        <td>
            <div class="d-flex  justify-content-center  button-container">
              <a href="{{route('dashboard.services.edit',$service->id)}}" class='edit-btn btn  '><i class="fa-solid fa-pen-to-square"></i></a>
     
             <form method="post" action="{{route('dashboard.services.destroy',$service->id)}}">
@csrf
@method('delete')
<button type="submit" class="delete-btn"> <i class="fa-solid fa-trash"></i></button>

             </form>
            </div>
        </td>
    </tr>
     @endforeach
  </tbody>
</table>
</div>
{{ $services->links() }}
</div>


</section>
@endsection('content')