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
                    <h2 class="text-white py-2 bg text-center">Login</h2>
                        <form method="post" action="{{route('login')}}"  class="p-5">

                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email" value="{{old('email')? old('email'):''}}">
                            @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           
                            </div>
                       
              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="password"  value="{{old('password')? old('password'):''}}">
                            @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            <div class="mb-3  float-end">
                                <button type="submit" class="btn btn-light px-5" data-mdb-ripple-color="white" style="z-index: 1;">Login</button>
                            </div>
 {{-- @if (Route::has('password.request'))
                               <div class="mt-3">
                                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                </div> 
                            @endif --}}
                        </form>
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



