@extends('./dashboard.master')
@section('title' , 'display video')
@section('content')


<section class='parteners d-flex flex-column  w-100'>


<h2 class="text-center">Our videos</h2>

<div class="container ">

<div class="add-partener add-container  w-100  ">
<a href="{{route('dashboard.videos.create')}}" class='add-btn'>Add New video </a>
</div>
<div class="table-wrapper table-responsive">
<table class="table table-striped table-hover table-sm">
  <thead>
    <th>#</th>
    <th> Video</th>
  
    <th>Action</th>

  </thead>

  <tbody>
  @foreach ($videos as $video )
    
 
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$video->vidio}}
      
      
       <video controls width="200" height="200">
        <source src="{{ asset($video::PATH . $video->video) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
      
      </td>
      
        <td>
            <div class="d-flex  justify-content-center button-container">
              <a href="{{route('dashboard.videos.edit',$video->id)}}" class='edit-btn btn  '><i class="fa-solid fa-pen-to-square"></i></a>
     
             <form method="post" action="{{route('dashboard.videos.destroy',$video->id)}}">
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
{{ $videos->links() }}
</div>


</section>
@endsection('content')