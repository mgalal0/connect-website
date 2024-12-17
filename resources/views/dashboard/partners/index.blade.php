@extends('./dashboard.master')
@section('title' , 'display partners')
@section('content')


<section class=' d-flex flex-column  w-100'>


<h2 class="text-center">Our Partners</h2>

<div class="container ">

<div class="add-partener add-container  w-100  ">
<a href="{{route('dashboard.partners.create')}}" class='add-btn'>Add New Partener </a>
</div>
<div class="table-wrapper table-responsive">
<table class="table table-striped table-hover table-sm">
  <thead>
    <th>#</th>
    <th> Name</th>
   
    <th>service</th>
     <th> Logo</th>
    <th>Action</th>

  </thead>

  <tbody>
  @foreach ($partners as $partner )
    

    <tr>
        <td>{{$loop->iteration}}</td>
      <td>{{$partner->name}}</td>
      <td>{{$partner->service->name}}</td>
      <td> <img src="{{asset($partner::PATH.$partner->logo)}}" style="width:100px;height:100px">
      </td>
        <td>
            <div class="d-flex  justify-content-center  button-container">
              <a href="{{route('dashboard.partners.edit',$partner->id)}}" class='edit-btn btn  '><i class="fa-solid fa-pen-to-square"></i></a>
               <form method="post" action="{{route('dashboard.partners.destroy',$partner->id)}}">
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
{{ $partners->links() }}
</div>


</section>
@endsection('content')