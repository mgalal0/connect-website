

<footer>
     
     <div class="footer-img">
   <div class="footer-content ">
   <div class="container"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
   data-aos-easing="ease-in-out">
       <h2>We're the experts.<br> Let us help you. </h2>
   
       <div class="contact-link ">
         <a href="{{route('contact.create')}}"  >CONTACT US</a>
       </div>
       <div class="logo ">
         <img src="{{asset('front/assets/images/Connect_Logo.png')}}" alt="">
       </div>
       </div>
       </div>
   
   
       <img src="{{asset('front/assets/images/footer-img.png')}}" alt=""  class="w-100 desktop-img">
       <img src="{{asset('front/assets/images/footer-mob-img.png')}}" alt="" class="d-none mob-img">
     </div>
   </footer>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       AOS.init();
     </script>
    <script src="{{asset('front/assets/vendor/aos/aos.js')}}"></script>
   
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>


    <!-- owl-carousel =============== -->
 
    <script  src="{{asset('front/assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<!-- !-- Include SweetAlert JS -->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>


 <script>
  $('.partners-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script>
    @yield('script')
</body>
</html>



