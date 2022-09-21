 <!-- admin Sidebar -->
 <div class="sidebar-fixed position-fixed">

<a class="logo-wrapper waves-effect">
  <img src="../images/make3.jpg" class="img-fluid" alt="">
</a>

<div class="list-group list-group-flush">
  <a href="{{url('/dashboard')}}" class="list-group-item active waves-effect">
    <i class="fa fa-pie-chart mr-3"></i>Dashboard
  </a>
  <a href="{{url('home-slider')}}" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-address-card mr-3"></i>Slider</a>


  <a href="#" class="list-group-item list-group-item-action waves-effect">
    <i class="fas fa-envelope-open-text mr-3"></i>Contact Message</a>
  <a href="{{url('registered-user')}}" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-users mr-3"></i>Registered User </a>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <a href="#" class="">
    <i class="fa fa-audio-description mr-3"></i> Audio Collection</a>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="group">Group</a>
    <a class="dropdown-item" href="/category">Category</a>
    <a class="dropdown-item" href="/sub-category">Sub-Category</a>
    <a class="dropdown-item" href="home-audio">Audio</a>
  </div>
</div>
</div>
</div>
<!-- admin Sidebar -->