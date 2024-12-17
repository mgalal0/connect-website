<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
  @yield('title')
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
        <!-- fontawesome-link------------------------------------- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
 
  <!-- bootstrap-link ----------------------------- -->
  <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" >
  <!-- CSS Files -->

  <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">
  
</head>
<body class="g-sidenav-show  bg-gray-200">
@include('sweetalert::alert')

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{asset('dashboard/assets/img/Connect_Logo.png')}}" alt="" class='w-25'></a>
    <button class="navbar-toggler" type="button"
     data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    
      <i class="fa-solid fa-bars  navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link {{ isActiveRoute('landing')}}" aria-current="page" href="{{route('landing')}}"> <i class="fa-solid fa-house"></i>  Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link  {{ isActiveRoute('dashboard.profile.edit')}}" aria-current="page" href="{{route('dashboard.profile.edit')}}"> <i class="fa-solid fa-gear me-1"></i>Setting</a>
        </li>

       
       
        <li class="nav-item">
          <a class="nav-link   {{ isActiveRoute('logout')}}" href="{{route('logout')}}   "> <i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
        </li>
      
    
      </ul>
    </div>
  </div>
</nav>

