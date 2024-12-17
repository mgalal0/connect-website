@extends('./dashboard.master')
@section('title' , 'display gallery')
@section('content')


<section class='parteners d-flex flex-column  w-100'>


<h2 class="text-center">Our Gallery</h2>

<div class="container ">

<div class="add-partener add-container  w-100  ">
<a href="{{route('dashboard.gallery.create')}}" class='add-btn'>Add  To  Gallery </a>
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
  @foreach ($galleries as $gallery )
    
 
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$gallery->name}}</td>
      <td>{{$gallery->description}}</td>
      <td> <img src="{{asset($gallery::PATH.$gallery->image)}}" style="width:100px;height:100px">
      </td>
        <td>
            <div class="d-flex  justify-content-center  button-container">
              <a href="{{route('dashboard.gallery.edit',$gallery->id)}}" class='edit-btn btn  '><i class="fa-solid fa-pen-to-square"></i></a>
     
             <form method="post" action="{{route('dashboard.gallery.destroy',$gallery->id)}}">
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
{{ $galleries->links() }}
</div>


</section>
@endsection('content')