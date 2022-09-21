<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>
@yield('title') | niwanaabimuwa -Admin panel
 </title>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB css link -->

<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>

<link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
<style>
.sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

.container-for-admin{
  background-color: #eee!important;
}

.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}

    </style>
<!-- MDB -->
</head>
<body>
<div class="container-for-admin">
    <header>
 @include('partials.adminnavbar')
 @include('partials.adminsidebar')
    </header>

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">

@yield('content')
</main>
@include('partials.adminfooter')
</div>






<script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('assets/js/mdb.js')}}"></script>  
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>


</body>
</html>