@extends('layouts.frontend')

@section('title')
collection - category - SubCategory - Audio Mp3
@endsection




@section('content')
<div class="container-fluid ">

<div class="row">
    <div class="col-md-12">
   
        <label for="">collection/ {{$subcategory->category->group->name}} / {{$subcategory->name}}</label>

    </div>



</div>


</div>

<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

<style>

      audio {
    filter: sepia(30%) saturate(100%) grayscale(1) contrast(99%) invert(22%);
    width: 220px;
    height: 25px;
    margin: 0;
  padding: 0;
  border: none;
  outline: none;
  border-radius: 2px;
  text-align:center;
  background-color: rgba(5, 173, 13, 0.49);
}

h1 {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
               
}
.card {
        width: 280px;;
    border-radius: 20px;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
}


.jumbotron {
    padding: 1rem 1rem;
    margin-top: 15px;


}

    </style>

@include('frontend.collection.ifram.style')

<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="col-sm-10">
     
  <div class="container inline-flex p-2">
     
    
  <main role="main" id="mp3">
 
       
 
       <div class="album py-5 bg-light">
 
         <div class="container">
 
           <div class="row">
             
             @foreach ($audio as $key => $audio_item)
             
               <div class="card p-3  box-shadow mb-2 mr-4" >
 
                 <img class="card-img-top" style="height:110px" src="{{ asset('uploads/audio/image/'.$audio_item->image_path)}}" alt="Card image cap">
                
                 <div class="card-body ">
 
                   <marquee style="font-family:Book Antiqua; color: #FFFFFF" bgcolor="#212529" scrolldelay="200">{{ $audio_item->id }}  -----  {{ $audio_item->heading_name }}  </marquee>
                  
                   <marquee behavior="2" direction=""> <p class="card-text" style="font-weight:40px;"></p></marquee>
                
                   <div class="" style="font-weight:40px; text-align:center; width:230px; font-size:bold; font-family: 'Times New Roman', Times, serif; background-color:#212529; color:#fff">
                
                   <strong>Desription:&nbsp;&nbsp;{{ $audio_item->description }}</strong>
               </div>
 
                 <audio id="myTune{{$key}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                   <source  src="{{ asset('uploads/audio/mp3/'.$audio_item->mp3url) }}">
                 </audio>
                
                   <div class="d-flex  justify-content-between align-items-center ">
                     <div class="btn-group" style="width: 50%" >
                     <button id="playButton" onclick="document.getElementById('myTune{{$key}}').play()" class="btn btn-primary btn-sm btn-round" >
                      <i class="fa fa-play"> </i>
                       </button>
                       <button id="pauseButton" onclick="document.getElementById('myTune{{$key}}').pause()" class="btn btn-info btn-sm btn-round" >
                         <i class="fa fa-pause"> </i>
                          </button>
 
                       <button class="btn btn-secondary btn-sm btn-round " type="button" >
                         <i class="fa fa-step-forward"> </i>
                          </button>
 
                          <button id="stopButton"  onclick="document.getElementById('myTune{{$key}}').pause(); document.getElementById('myTune{{$key}}').currentTime = 0;" class="btn btn-sm btn-round btn-danger"> <i class="fa fa-stop"> </i></button>
                          
                          <button class="btn btn-secondary btn-sm btn-round " type="button">
                           <i class="fa fa-step-backward"> </i>
                            </button>
                               </div>
                            </div> 
                            
                            
                            <div class="d-flex  justify-content-between align-items-center ">
                     <div class="btn-group" style="width: 50%" >
                       <button onclick="document.getElementById('myTune{{$key}}').volume+=0.1" class="btn btn-warning btn-sm btn-round " type="button" >
                         <i class="fa fa-volume-up"> </i>
                          </button>
                          <button onclick="document.getElementById('myTune{{$key}}').volume-=0.1" class="btn btn-warning btn-sm btn-round " type="button">
                           <i class="fa fa-volume-down"> </i>
                            </button>
                       <button onclick="document.getElementById('myTune{{$key}}').muted=!document.getElementById('myTune{{$key}}').muted" type="button" class="btn btn-sm btn-round btn-info"><i class="fa fa-volume-off"></i></button>
                    
                       </div>
                            </div> 
                            
                   
                   
             
 
               @include('frontend.collection.ifram.table')
                 </div>
               </div>
             
             @endforeach
             <style>
.pagination-outer{ text-align: center; }
.pagination{
    font-family: 'Ubuntu', sans-serif;
    display: inline-flex;
    position: relative;
}
.pagination li a.page-link{
    color: #fff;
    background-color: #0a3d62;
    font-size: 20px;
    font-weight: 500;
    line-height: 38px;
    height: 38px;
    width: 38px;
    padding: 0;
    margin: 0 6px 6px;
    border: none;
    border-radius: 50%;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.pagination li a.page-link:hover,
.pagination li a.page-link:focus,
.pagination li.active a.page-link:hover,
.pagination li.active a.page-link{
    color: #fff;
    background: #0a3d62;
    transform: rotate(360deg);
}
.pagination li a.page-link:before{
    content: '';
    background: #3c6382;
    height: 100%;
    width: 100%;
    border-radius: 50%;
    box-shadow: 0 0 5px #3c6382;
    opacity: 0.5;
    transform: scale(0);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.pagination li a.page-link:hover:before,
.pagination li a.page-link:focus:before,
.pagination li.active a.page-link:hover:before,
.pagination li.active a.page-link:before{
    transform: scale(1.25);
}
@media only screen and (max-width: 480px){
    .pagination{
        font-size: 0;
        display: inline-block;
    }
    .pagination li{
        display: inline-block;
        vertical-align: top;
        margin: 0 0 10px;
    }
}
             </style>


           </div>  
              
      </div>
     </main>

     <div class="demo">
    <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            
         
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
       </nav>
       </div>




 </div>
    </div>


    <div class="col-sm-1">
      <h2>ADS place hear </h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      
      </ul>
      <hr class="d-sm-none">
    </div>
  


  </div>
</div>












    
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">')</script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.8/holder.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {
  
        $(".btn-success").click(function(){ 
            var html = $(".parent").html();
            $(".increment").after(html);
        });
  
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".form-group").remove();
        });
  
      });

          // Finds all iframes from youtubes and gives them a unique class
    // jQuery('iframe[src*="https://www.youtube.com/embed/"]').addClass("youtube-iframe");

jQuery(".stop-button").click(function() {
  // changes the iframe src to prevent playback or stop the video playback in our case
  $('.youtube-iframe').each(function(index) {
    $(this).attr('src', $(this).attr('src'));
    return false;
  });
  
//click function
});

$(document).ready(function() {
  $('#play-mp3').on('click', function(ev) {
 
    $("#mp3")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });
});


//use .one to ensure this only happens once
$("#play-mp3").one(function(){
  //as noted in addendum, check for querystring exitence
  var symbol = $("#mp3")[0].src.indexOf("?") > -1 ? "&" : "?";
  //modify source to autoplay and start video
  // $("#mp3")[0].src += symbol + "autoplay=1";
 });


      $(document).ready(function () {
    var ownVideos = $("iframe");
    $.each(ownVideos, function (i, video) {                
        var frameContent = $(video).contents().find('body').html();
        if (frameContent) {
            $(video).contents().find('body').html(frameContent.replace("autoplay", ""));
        }
    });
  });

  function playPrevious() {
    audioElement.pause();
 
    currentAudioIndex--;
 
    if (currentAudioIndex < 0) {
        currentAudioIndex = audios.length - 1;
    }
 
    console.log(currentAudioIndex);
    audioElement.src = audios[currentAudioIndex].src;
 
    audioElement.play(); 
}

var activeSong;
//Plays the song. Just pass the id of the audio element.
function play(id){
  //Sets the active song to the song being played. All other functions depend on this.
  activeSong = document.getElementById(id);
  //Plays the song defined in the audio tag.
  activeSong.play();

  //Calculates the starting volume percentage of the song.
  var percentageOfVolume = activeSong.volume / 1;
  var percentageOfVolumeMeter = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;

  //Fills out the volume status bar.
  document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}
 
// ...
  
  </script>














@endsection