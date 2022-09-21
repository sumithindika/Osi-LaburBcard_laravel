<!DOCTYPE html>
<html lang="en">
<head>
@include('partials/head')

 <link rel="stylesheet" type="text/css" href="/css/slider.css" >

 <script type="text/javascript"src="/js/slider.js"></script>

</head>
<body>
    <!-- Start Bootstrap Slider BODY section -->
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../images/slider/01.jpg" style="width:100%">
    <div class="text">image01</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../images/slider/02.jpg" style="width:100%">
    <div class="text">image Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../images/slider/03.jpg" style="width:100%">
    <div class="text">image Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!-- End Bootstrap Slider BODY section -->
</body>
</html>