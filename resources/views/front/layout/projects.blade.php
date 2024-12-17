      <!-- start our-project-section ----------------------------------------------------- -->
      @extends('./front.master')
      @section('content')
      <section class="our-projects">
        <div class="container">
            <div class="title w-50  m-auto d-flex justify-content-center">
                <h2 class=""  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    Our<br> projects

                </h2>
            </div>

            <nav class="nav nav-tabs" data-aos="fade-up" data-aos-duration="400" date-aos-delay="500"
              data-aos-easing="ease-in-out">
              <button data-bs-target="#tab-posm" type="button" class="nav-link active"
                data-bs-toggle="tab">POSM Promotional and Advertising Materials</button>
                <button data-bs-target="#tab-first" type="button" class="nav-link"
                data-bs-toggle="tab">Managing Social Media Accounts</button>
                <button data-bs-target="#tab-sec" type="button"
                class="nav-link" data-bs-toggle="tab"> Graphic Design</button>
                <button data-bs-target="#tab-third"
                type="button" class="nav-link" data-bs-toggle="tab">Personalized Gifts</button>
                <button data-bs-target="#tab-third"
                type="button" class="nav-link" data-bs-toggle="tab">Exhibition Management</button>
                <button data-bs-target="#tab-third"
                type="button" class="nav-link" data-bs-toggle="tab">Event Management</button>
            </nav>

            <div class="tab-content">
                <div class="tab-content">
                    <div class="tab-pane fade active show " id="tab-posm">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-5">
                                <div class="pro-img "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                                data-aos-easing="ease-in-out">
                                    <img src="{{asset('front/assets/images/proj-img1.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="pro-img"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                                data-aos-easing="ease-in-out">
                                    <img src="{{asset('front/assets/images/proj-img2.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="pro-img"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                                data-aos-easing="ease-in-out">
                                    <img src="{{asset('front/assets/images/proj-img3.png')}}" alt="">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="pro-img"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                                data-aos-easing="ease-in-out">
                                    <img src="{{asset('front/assets/images/proj-img4.png')}}" alt="">
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      @endsection('content')