<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.deshboard')}}">
      <div class="sidebar-brand-icon">
        <img src="{{asset('backend/img/logo/logo2.png')}}">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin.deshboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
   
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Food</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="{{route('food.index')}}">Food List</a>
          <a class="collapse-item" href="{{route('food.create')}}">Add Food</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm2" aria-expanded="true"
        aria-controls="collapseForm2">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Offer</span>
      </a>
      <div id="collapseForm2" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="{{route('offer.index')}}">Offer List</a>
          <a class="collapse-item" href="{{route('offer.create')}}">Give Offer</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm3" aria-expanded="true"
        aria-controls="collapseForm3">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Chef</span>
      </a>
      <div id="collapseForm3" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="{{route('chef.index')}}">Chef List</a>
          <a class="collapse-item" href="{{route('chef.create')}}">Add Chef</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm4" aria-expanded="true"
        aria-controls="collapseForm4">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Slider</span>
      </a>
      <div id="collapseForm4" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
          <a class="collapse-item" href="{{route('slider.index')}}">Slider List</a>
          <a class="collapse-item" href="{{route('slider.create')}}">Add Slider</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('admin.reservation')}}">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Reservation</span>
      </a>
     
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm7" aria-expanded="true"
        aria-controls="collapseForm7">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Admin</span>
      </a>
      <div id="collapseForm7" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Admin</h6>
          <a class="collapse-item" href="{{ route('register')}}">Add Admin</a>
          <a class="collapse-item" href="{{ route('get.admin')}}">Admin List</a>
          <a class="collapse-item"  href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="fal fa-sign-out"></i>
          {{ __('Logout') }}
          
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </li>
  </ul>