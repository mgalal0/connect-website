@extends('./dashboard.master')
@section('title' , 'display projects')
@section('content')


<section class=' d-flex flex-column  w-100'>


<h2 class="text-center">Our projects</h2>

<div class="container ">

<div class="add-partener add-container  w-100 py-3 ">
<a href="{{route('dashboard.projects.create')}}" class='add-btn'>Add New project</a>
</div>

<div class="table-wrapper table-responsive">
<table class="table table-striped table-hover table-sm">
  <thead>
    <th>#</th>
    <th> Name</th>
    <th> Description</th>
        <th> Service</th>
    <th> Image</th>
    <th>Action</th>

  </thead>

  <tbody>
  @foreach ($projects as $project )
    
 
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$project->name}}</td>
      <td>{{$project->description}}</td>
       <td>{{$project->service->name}}</td>
      <td> <img src="{{asset($project::PATH.$project->image)}}" style="width:100px;height:100px">
      </td>
        <td>
            <div class="d-flex  justify-content-center  button-container">
              <a href="{{route('dashboard.projects.edit',$project->id)}}" class='edit-btn btn  '><i class="fa-solid fa-pen-to-square"></i></a>
     
             <form method="post" action="{{route('dashboard.projects.destroy',$project->id)}}">
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
</table>
{{ $projects->links() }}
</div>


</section>
@endsection('content')