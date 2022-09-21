
<style>
 
 .carousel-item {
height: 300px;
}

.item img {
position: absolute;
top: 0;
left: 0;
min-height: 300px;
}


</style>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
   @php
     $i = 1;
   @endphp
   
      @foreach ($slider as $slideritem )
        
 

    <div class="carousel-item {{$i == '1' ? 'active':'' }}">
      @php
        $i++;
      @endphp
      <img src="{{ asset('uploads/slider/'.$slideritem->image) }}" class="d-block w-100" alt="slider image">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$slideritem->heading}}</h5>
        <p>{{$slideritem->description}}</p>
       <a href="{{$slideritem->description}}">{{$slideritem->link_name}}</a>
      </div>
    </div>
    @endforeach

  </div>


  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>