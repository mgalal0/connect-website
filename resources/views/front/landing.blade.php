@extends('./front.master')
@section('title' , 'home')
      @section('content')
       <!-- start of banner section--------------------------------- -->

       <section class="hero ">
       <div class="video-container ">
       @if($video)
      <video id="background-video" autoplay muted loop>
        <source src="{{asset($video::PATH.$video->video)}}"  type="video/mp4">
      </video> 
      @endif 

        <div class="over-lay ">
      <div class="banner-img-mob d-flex justify-content-center align-items-center  ">
        <img src="{{asset('front/assets/images/img.png')}}" alt="" class="w-50 d-none ">
      </div>
</div>

        <div class="banner-img   ">
          <img src="{{asset('front/assets/images/img.png')}}" alt="" class="">
          </div>

       <div class="banner">
      <div class="container">
        <div class="banner-content  " data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">
          <p>A young advertising company that have a Connect
            With extensive knowledge of integrated marketing in Kingdom of Saudi Arabia.</p>
        </div>
      </div>

 
</div> 
<div class="banner-mob d-none"></div>
      </div>
        
    
   
       </section>
  
 



    <!-- end of banner section ------------------------------------------------ -->

       <!-- start about-us section --------------------------- -->
       <section class="about" id="about-us">
        <div class="container">
          <div class="about-content  d-flex justify-content-center align-items-center">
            <div class="title">
              <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
              data-aos-easing="ease-in-out">WHAT WE DO?</h2>
            </div>
              <div class="line"></div>
            <div class="content" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">
              <p>Connect is a creative Saudi company in the field of marketing and advertising.
                 We excel in providing a comprehensive range of services that help promote and enhance brands. We also strive to be a leader for our clients and partners locally and globally.</p>
            </div>
          </div>
        </div>
      </section>
     
      <!-- end about section ----------------------------------------------- -->
<!-- start our-services section --------------------------------------------- -->

<section class="our-services">
@foreach($services as $key => $service)
<!-- left-side-img -------------------------------------- -->
@if($key % 2 === 0  && $service->name !== 'Managing Social Media Accounts')
  <div class="container-with-left-image">
    <div class="row justify-content-between align-items-center ">
      <div class="col-lg-5 bg">
      <img src="{{asset('front/assets/images/left-bg.png')}}" alt="" class='left-bg '>
      <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img  left-overlay-img'>


      </div>

      <div class="col-lg-5  ">
        <div class="content">
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">{{$service->name}}</h2>

        <p data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out"> 
          {{$service->description}}
           </p>
      </div>

</div>
    <div class="col-lg-5  ">
      <div class=" d-flex justify-content-center align-items-center">
      <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img mob-img d-none w-75 '>
      </div>
      </div>
    </div>
  </div>
  @elseif($key % 2 !== 0)
  <!-- right-side-img ---------------------------------------------------------- -->
  <div class="container-with-right-image ">
    <div class="row justify-content-between align-items-center ">



    <div class="col-lg-5 ">
      <div class="content ">
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">{{$service->name}}</h2>

        <p data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">

        {{$service->description}}
        </p>
      </div>
</div>
      <div class="col-lg-5 bg ">
      <img src="{{asset('front/assets/images/right-bg.png')}}" alt="" class='right-bg w-100 '>
      <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img right-overlay-img '>

      </div>
      
      <div class="col-lg-5   ">
      <div class="  d-flex justify-content-center align-items-center">
      <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img mob-img d-none  m-0 w-75 '>
      </div>
      </div>
     
    </div>
  </div>

  @elseif( $service->name =='Event Management' )
  <!-- event-section -------------------------------------------------------------------------- -->
  <div class="container-with-right-image ">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5  ">
        <div class="content bg-danger">

        
        <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">{{$service->name}}</h2>
 
        <p data-aos="zoom-in" data-aos-duration="300" date-aos-delay="200"
        data-aos-easing="ease-in-out">      {{$service->description}}
        </p>

        <div class="bg-info ">
      <img src="{{asset('front/assets/images/event-left-img.png')}}" alt="" class="mt-5">
  
      </div>
</div>
     

</div>
      <div class="col-lg-5 bg">

        <img src="{{asset('front/assets/images/right-bg2.png')}}" alt="" class='right-bg w-100'>
        <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img right-overlay-img'>

    
      
      </div>
      <div class="col-lg-5 ">
      <div class="   d-flex justify-content-center align-items-center">
      <img src="{{asset($service::PATH.$service->image)}}" alt="" class='overlay-img mob-img d-none m-0 w-75 '>
      </div>
      </div>

      <div class="img event-mob-img d-none ">
      <img src="{{asset('front/assets/images/event-left-img.png')}}" alt="" class="mt-5">
      </div>
</div></div>
  
  <!-- social-media-section  ----------------------------------------------------------------- -->
  @elseif($service->name == 'Managing Social Media Accounts' )
  <div class="container mb-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5">
        <div class="content social-media-content w-100">
          <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">{{$service->name}}</h2>
          <div class="content">
          <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">

          {{$service->description}}
        </p>
        </div></div>
      </div>

      <div class="col-lg-5 d-flex  justify-content-center align-items-center ">
        <div class="social-img w-75">
        <img src="{{asset($service::PATH.$service->image)}}" alt="" class='w-100'>
        </div>
    
      </div>
    </div>
  </div>
  @endif
  @endforeach
  </section>

  <!-- start-why-connect-section ----------------------------------------------------------- -->
 
    <div class="connect">
     <div class="container-fluid">
      <div class="row first-row align-items-center ">
       

        <div class="col-lg-5 man-img">
                <div class="img w-100">
                <img src="{{asset('front/assets/images/man.png')}}" alt="" class=''>
                </div>
        </div>

        <div class="col-lg-5 ">
        <div class="content "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
    data-aos-easing="ease-in-out">
      <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out">WHY CONNECT</h2>
      <p class="why-connect-text">We have contributed to the success of many projects
        and brands, proving that we have sufficient skills and
        experience to make your brand a success.</p>
    </div>
        </div>
      </div>

      <div class="row sec-row justify-content-center">
        <div class="col-lg-5">
          <div class="content">
          <div class="">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">OUR VISION</h2>
          <p class=""  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">We aim to be a leading and respected brand in the
            field of «marketing and advertising» at the local,
            regional and global level, contributing to the
            development of the economy and the “2030”
            vision of the Kingdom through our contribution
            to the success of our partners.</p>
        </div>
  
        <div class="">
          <h2 data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">Our Message</h2>
          <p data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
          data-aos-easing="ease-in-out">At CONNECT we are always working to meet
            the needs of our customers to the highest
            quality standards.</p>
        </div>
          </div>
        </div>

        <div class="col-lg-5 woman-img">
           <div class="img  d-flex flex-end w-100">
           <img src="{{asset('front/assets/images/woman.png')}}" alt="" class='w-50'>
           </div>
        </div>
      </div>
     </div>
</div>
<!-- end why-connect-section ---------------------------------------------------------- -->

<!-- start our-parteners-section ------------------------------ -->
<!-- section.our-parteners-section------------------------------------- -->
<section class="our-parteners  "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
data-aos-easing="ease-in-out">
        <div class="container">
          <div class="title d-flex justify-content-center w-100 ">
            <h2 class="mb-5 mt-5"   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">OUR <br>PARTENERS</h2>
          </div>
 
    <article class="">
    <div class="">
  
        <div class="parteners">
          @foreach($partners as $partner )
        <div class="  img-box">
      <img src="{{asset($partner::PATH.$partner->logo)}}" alt="">
           
      </div>
@endforeach
    
      </div></div></div>
  
  
  
  </article>

  <!-- our-pateners in mob ---------------------------------------- -->

  <div class="d-none partners-carousel-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="owl-carousel owl-theme partners-carousel">
        @foreach($partners as $partner )
          <div class="item">
             <img src="{{asset($partner::PATH.$partner->logo)}}" alt="">
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection('content')