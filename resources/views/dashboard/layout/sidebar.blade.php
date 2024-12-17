<div class="wrapper  ">
    <nav id="sidebar" class=" ">
      <div class="sidebar-header">
        <h3 class='text-center'>Admin  </h3>
      </div>
      <ul class="list-unstyled components ">
      
      <li class="nav-item ">
      
          <a class="nav-link  {{ isActiveRoute('home') }}" href="{{route('home')}}">
          <i class="fas fa-home"></i>
            Home
        </a>
        </li>
        <hr>

               
        <li>
          <a href="{{route('dashboard.services.index')}}" class="{{ isActiveRoute('dashboard.services.index') }}" >
          <i class="fa-solid fa-hands-holding-child"></i>
            Services 
          </a>
        </li>
     <hr>
     <li>
          <a href="{{route('dashboard.partners.index')}}" class="{{ isActiveRoute('dashboard.partners.index') }}"  >
          <i class="fa-solid fa-handshake-angle"></i>
            Parteners
          </a>
        </li>
        <hr>

        <li>
          <a href="{{route('dashboard.projects.index')}}"  class="{{ isActiveRoute('dashboard.projects.index') }}"  >
          <i class="fas fa-briefcase"></i>
            Projects
          </a>
        </li>
        <hr>


        <li>
          <a href="{{route('dashboard.gallery.index')}}"   class="{{ isActiveRoute('dashboard.gallery.index') }}" >
          <i class="fa-solid fa-images"></i>
            Gallery
          </a>
        </li>
 

        <hr>
        <li>
          <a href="{{route('dashboard.videos.index')}}"   class="{{ isActiveRoute('dashboard.videos.index') }}" >
          <i class="fa-solid fa-video"></i>
           Videos
          </a>
        </li>
<hr>
        <li>
          <a href="{{route('dashboard.contacts.index')}}"   class="{{ isActiveRoute('dashboard.contacts.index') }}" >
          <i class="fa-solid fa-address-book"></i>
           Contact
          </a>
        </li>
      </ul>
    </nav>
    <div class='sidebar-toggler bg-white d-flex'>
      <nav class="  ">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn ">
            <i class="fas fa-align-left"></i>
           
          </button>
          
        </div>
      </nav>
   
    </div>
    <div class="content w-100 ">
@yield('content')
</div>
  </div>