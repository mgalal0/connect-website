@extends('./front.master')
      @section('content')

<section class="gallery">


        <div class="container">
            <h2 class="text-center">Gallery</h2>
            <div class="row justify-content-center  ">
@php
$index=1;
$flag1=true;
$flag2=true;
$flag3=1;

@endphp

            @foreach($galleries as $gallery)

            @if($index %2==0 && $index % 3 != 0 && $flag1 )
                <div class="col-lg-5">
                  <div class="img w-100">
                    <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">

                    <div class="description">
                        <h3>{{$gallery->name}}</h3>
                        <p>{{$gallery->description}}</p>
                    </div>
                  </div>
                </div>
                @php

$flag1=false;
@endphp
 @elseif($index %2==0 && $index % 3 != 0 && !$flag1 )
                <div class="col-lg-7">
                    <div class="img w-100">
                      <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
  
                      <div class="description">
                          <h3>{{$gallery->name}}</h3>
                            <p>{{$gallery->description}}</p>
                      </div>
                    </div>
                  </div>


@php
$index++;
$flag1=true;
@endphp
@elseif($index %2==1 && $index % 3 != 0 && $flag2)
                  <div class="col-lg-7">
                    <div class="img w-100">
                      <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
  
                      <div class="description">
                          <h3>{{$gallery->name}}</h3>
                          <p>{{$gallery->description}}</p>
                      </div>
                    </div>
                  </div>
                  @php

$flag2=false;
@endphp
  @elseif($index %2==1 && $index % 3 != 0 && !$flag2)
                  <div class="col-lg-4">
                      <div class="img w-100">
                        <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>{{$gallery->name}}</h3>
                               <p>{{$gallery->description}}</p>
                        </div>
                      </div>
                    </div>
                    @php
$index++;
@endphp
 @elseif( $index % 3 == 0 && $flag3==1)
                    <div class="col-lg-4">
                      <div class="img w-100">
                        <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>{{$gallery->name}}</h3>
                      <p>{{$gallery->description}}</p>
                        </div>
                      </div>
                    </div>
                    
                    @php

$flag3=2;
@endphp
 @elseif( $index % 3 == 0 && $flag3==2)
                    <div class="col-lg-5">
                      <div class="img w-100">
                        <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>{{$gallery->name}}</h3>
                           <p>{{$gallery->description}}</p>
                        </div>
                      </div>
                    </div>

                    @php

$flag3=3;
@endphp
 @elseif( $index % 3 == 0  && $flag3==3)
                    <div class="col-lg-3">
                      <div class="img w-100">
                        <img src="{{asset($gallery::PATH.$gallery->image)}}" alt="" class="w-100">
    
                        <div class="description">
                            <h3>{{$gallery->name}}</h3>
                            <p>{{$gallery->description}}</p>
                        </div>
                      </div>
                    </div>
                                    @php
$index++;
$flag3=1;
@endphp
@endif
                  


                    @endforeach
                    {{ $galleries->links() }}
            </div>
        </div>
    </section>

      @endsection('content')