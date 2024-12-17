   <!-- start contact-banner section -------------------------------------- -->

   @extends('./front.master')
   @section('title' , 'contact us')
      @section('content')
   <section class="contact-banner">
        <div class="container ">
            <div class="form mt-3">
            <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">Contact Us</h2>

            <form action="post" id="contact">
                <div class="input"   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Full name</label>
                    <input type="text" class="form-control" name="name">
                    <small class="text-danger" id='name-error'></small>
                </div>

                <div class="input"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                    <small class="text-danger" id='email-error'></small>
                </div>

                <div class="textarea"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Message</label>
                 <textarea name="message" id="" cols="35" rows="2" class="form-control"></textarea>
                 <small class="text-danger" id='message-error'></small>
                </div>

                <button type="submit" >Send</button>
            </form>
</div>
           
        

         <div class="contact-us-img">
                <img src="{{asset('front/assets/images/contact-banner.png')}}" alt="">
            </div>
            </div>
    </section>

   
      @section('content')





      @section('script')

<script>

    $.ajaxSetup({
                    headers: 
                    {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
$('#contact').submit(function(e){

  e.preventDefault();
            var formData  = new FormData(jQuery('#contact')[0]);
  console.log(formData)
// start ajax
         $.ajax({
          url:"{{route('contact.store')}}",
                type:"POST",
                data:formData,
                contentType: false,
                processData: false,
                success:function(data){
                 $("#email-error").text('')
                  $("#name-error").text('')
                  $("#message-error").text('')
                // alert('success!')
                Swal.fire(
 
  'message send successfully',
  'success'
)
                        },
                    error:function(reject){
                      
                    }
                    , error: function (xhr, status, error) 
                {
                  $("#email-error").text(xhr.responseJSON.errors.email)
                  $("#name-error").text(xhr.responseJSON.errors.name)
                  $("#message-error").text(xhr.responseJSON.errors.message)
                   
                    
                }

                    });  
// end ajax
})
</script>

      @endsection