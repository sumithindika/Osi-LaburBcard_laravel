<!doctype html>
<html>
<head>
   @include('partials.head')
</head>
<body>
@include('partials.navbar')


<div class="container">
   <div class="row">
<div class="col-md-8 col-lg-8" >
@yield('content')
   </div>
   
   <div class="col-md-4 col-lg-4" >
   @include('partials.slider')
   </div>

   </div>
   </div>

   <footer class="row">
       @include('partials.footer')
   </footer>

</body>
</html>