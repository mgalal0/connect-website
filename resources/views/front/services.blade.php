<!-- start of banner section ---------------------------------------------- -->
    @extends('./front.master')
    @section('title' , 'our services')
      @section('content')
    <section class="brand-banner ">
        <!-- <div class="container-with ght-img"> -->
          <div class="container-fluid">
          
            <div class="row justify-content-between ">
              <div class="col-lg-5   ">
            <div class="banner-content">
                <h2   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out mt-4"  >Brand<br> Activation</h2>
                <div class="content">
                <p  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out"  >Connect is known for its success in
                    managing branding events in Saudi Arabia.
                    It features an integrated team that covers
                    all parts of the event marketing strategy
                    from start to finish</p>
                    </div>
            </div></div>

            

            <div class="col-lg-5  right-side-img p-0">
            <!-- <div class="banner-bg right-side-img  "> -->
              <div class="bg-img w-100 d-flex justify-content-end ">
              <img src="{{asset('front/assets/images/brand-banner-img.png')}}" alt="" class=' '>
              </div>
              
                <!-- <div class="img-layer"> -->
                  <img src="{{asset('front/assets/images/brand-img2.png')}}" alt="" class='img-layer'>
                <!-- </div> -->
            </div>

             <div class="col-lg-5 img-box     text-center d-flex justify-content-center align-items-center "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
             data-aos-easing="ease-in-out"  >
           
                <img src="{{asset('front/assets/images/brand-img2.png')}}" alt="" class=" d-none">
              </div>
        
            <!-- </div>  -->
  </div>
     
</div>
    </section>

    <!-- end o brand activation section --------------------------------------------------- -->

    <!-- start of brand gallery ------------------------------------------------------------- -->
    <section class="brand-gallery">
      <div class="container "   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out"   >
        <div class="imgs ">
          <div class="img-container">
            <img src="{{asset('front/assets/images/img1.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img2.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img3.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img4.png')}}" alt="">
          </div>
          <div class="img-container">
            <img src="{{asset('front/assets/images/img5.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img6.png')}}" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- end of brand gallery ------------------------------ -->

    <!-- start of other-services-section ------------------------ -->
    <section class="other-services">
      <div class="container">
         <div class="other-services-content d-flex justify-content-center ">
          <div class="title">
            <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out"   >Other Services</h2>
          </div>

          <div class="content">
             <ul  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
             data-aos-easing="ease-in-out"   >

             @foreach($services as $service )
<li>{{$service->name}}</li>
             @endforeach
              
             </ul>
          </div>
         </div>
      </div>
    </section>
  
      @endsection('content')

    <!-- end of other-services-section ----------------------------- -->