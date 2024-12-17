




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
  connect
  </title>
  <!-- bootstrap-link ----------------------------- -->
  <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" >
  <!-- CSS Files -->

  <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
  <style>

  </style>
</head>
<body class="g-sidenav-show  bg-gray-200">

<div class="container">

<section class="h-100 gradient-custom-2"   >
    <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
            
           <div class="card mt-5">
                    <div class="rounded-top  " >
                    
                    
                     <div class="mb-4 text-sm text-gray-600  text-white py-2 bg text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
                    
                        <form method="post" action="{{ route('password.email') }}"  class="p-5">

                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email" value="{{old('email')? old('email'):''}}">
                            @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           
                            </div>
                       
        

         <div class="mb-3  float-end">
                                <button type="submit" class="btn btn-light px-5" data-mdb-ripple-color="white" > {{ __('Email Password Reset Link') }}</button>
                            </div>
            
                    </div>
                </div>




              



                
            </div>
        </div>
    </div>
</section>

</div>





<script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>













