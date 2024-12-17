






@include('./dashboard.layout.header')

       

<div class="container">

<section class="h-100 gradient-custom-2"   >
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
            
           <div class="card mt-5">
                    <div class="rounded-top  " >
                    <h2 class="text-white py-2 bg text-center">Profile Information</h2>
                        <form method="post" action="{{ route('profile.update') }}"  class="p-5">

                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label ">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" value="{{auth()->user()->name}}">


                                  @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                         

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email" value="{{auth()->user()->email}}">
                            @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           
                            </div>
                       
             

                            <div class="mb-3  float-end">
                                <button type="submit" class="btn btn-light px-5" data-mdb-ripple-color="white" style="z-index: 1;">Update</button>
                            </div>

                        </form>
                    </div>
                </div>




                <!-- password -->
                <div class="card mt-5">
                    <div class="rounded-top  " >
                    <h2 class="text-white py-2 bg text-center">Change Password</h2>
                        <form method="post" action="{{ route('password.update') }}"  class="p-5">

                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label ">Current Password</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="current_password" >


                                  @error('current_password')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                         

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NewPassword</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="password" >
                            @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           
                            </div>
                       
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="password_confirmation" >
                            </div>


                            <div class="mb-3  float-end">
                                <button type="submit" class="btn btn-light px-5" data-mdb-ripple-color="white" style="z-index: 1;">Update</button>
                            </div>

                        </form>
                    </div>
                </div>




                
            </div>
        </div>
    </div>
</section>

</div>

 
@include('./dashboard.layout.footer')