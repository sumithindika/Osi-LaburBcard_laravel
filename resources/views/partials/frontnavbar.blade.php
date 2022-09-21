<!DOCTYPE html>
<html lang="en">
<head>

 <link rel="stylesheet" type="text/css" href="/css/navbar.css" >
 <script type="text/javascript"src="/js/navbar.js"></script>

</head>

<style>
.navbar-brand img{
  background-image: url('../images/make3.jpg');
  background-repeat: no-repeat;
    position: relative;

}


</style>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="../images/make3.jpg" ALIGN=CENTER  alt="Logo">




</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
      </li>
            <li class="nav-item" >
              <a class="nav-link" href="#mp3">Dharmadeshana</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">Dharma Chat</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Blog Post</a>
              </li>
             <li class="nav-item">
               <a class="nav-link" href="{{url('/contactus')}}">Contact Us</a>
              </li> 


             



    </ul>

    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                  target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
        </li>
              <li class="nav-item  ">
                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
  </ul>




  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-info">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    @php
                    $group = App\Models\Groups::where('status','!=','2')->get();
                  @endphp

                  @foreach ($group as $group_nav_item )

      <li class="nav-item">
        
            <a  class="nav-link" href="{{url('collection/'.$group_nav_item->url)}}" class="px-4 text-white">{{$group_nav_item->name}}</a>

      </li>
      
     
  @endforeach


    </ul>
  </div>
</nav>








</body>
</html>