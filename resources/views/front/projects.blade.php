<!-- start our-project-section ----------------------------------------------------- -->
@extends('./front.master')
      @section('title', 'our projects')
      @section('content')
          <section class="our-projects">
              <div class="container">
                  <div class="title w-50  m-auto d-flex justify-content-center">
                      <h2 class="" data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                          data-aos-easing="ease-in-out">
                          Our<br> projects

                      </h2>
                  </div>
                  <nav id="service-filter" class="nav nav-tabs" data-aos="fade-up" data-aos-duration="400"
                      date-aos-delay="500" data-aos-easing="ease-in-out">
                      @foreach ($services as $service)
                          <a data-service="{{ $service->id }}">

                              <button data-bs-target="#tab-posm" type="button" class="nav-link "
                                  data-bs-toggle="tab">{{ $service->name }}</button>

                          </a>
                      @endforeach

                  </nav>

                  <div class="tab-content">
                      <div class="tab-content">
                          <div class="tab-pane fade active show " id="tab-posm">
                              <div class="row justify-content-center align-items-center" id="project">
                                  @foreach ($projects as $project)
                                      <div class="col-md-5">
                                          <div class="pro-img " data-aos="fade-up" data-aos-duration="300"
                                              date-aos-delay="200" data-aos-easing="ease-in-out">
                                              <img src="{{ asset($project::PATH . $project->image) }}" alt="">
                                          </div>
                                      </div>
                                  @endforeach

                                  {{ $projects->links() }}
                              </div>
                          </div>
                      </div>



                  </div>


              </div>
          </section>
      @endsection('content')




      @section('script')


          <script>
              $(document).ready(function() {
                  // Add active class to the first link by default
                  $('#service-filter a:first').addClass('active');

                  $('#service-filter a').click(function(e) {
                      e.preventDefault();

                      // Remove active class from all links except the current clicked link
                      $('#service-filter a').not(this).removeClass('active');

                      // Add active class to the current clicked link
                      $(this).addClass('active');

                      var service = $(this).data('service');
                      console.log(service);
                      $.ajax({
                          url: '/projects/' + service,
                          type: 'GET',
                          success: function(data) {
                              console.log(data)
                              // Update the project list with the received data
                              $('#project').html(data);
                              console.log($('#project'))
                          },
                          error: function(error) {
                              console.error(error);
                          }
                      });
                  });
              });
          </script>



      @endsection