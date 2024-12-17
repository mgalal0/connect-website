@extends('./dashboard.master')
@section('title' , 'display contacts')
@section('content')


<section class='parteners d-flex flex-column  w-100'>


<h2 class="text-center">Our Contacts</h2>

<div class="container ">

<div class="table-wrapper table-responsive">
<table class="table table-striped table-hover table-sm">
  <thead>
    <th>#</th>
    <th> Name</th>
    <th> Email</th>
    <th> Message</th>
   
    <th>Action</th>

  </thead>

  <tbody>
  @foreach($contacts as $contact)
    <tr>
        <td>1</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
       <td>{{$contact->message}}</td>
        <td>
          
            <form method="post" action="{{route('dashboard.contacts.destroy',$contact->id)}}">
@csrf
@method('delete')
<button type="submit" class="delete-btn"> <i class="fa-solid fa-trash"></i></button>

             </form>
        </td>
    </tr>
    @endforeach

    {{ $contacts->links() }}
  </tbody>
</table>
</div>
</div>


</section>
@endsection('content')