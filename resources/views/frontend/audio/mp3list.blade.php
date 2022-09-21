

@section('title')
 Dharmadeshana List
@endsection

<!DOCTYPE html>
<html lang="en">
<head>

 
<link rel="stylesheet" href="/css/card/audio2.css" >
 
<link rel="stylesheet" href="/css/card/carddesign.css" >

</head>
<body>
    
<div class="container text-center">

<div class="container">

  <div class="card">
    <div class="card-body "> Dharmadeshana List

    <div class="simple-audio-player" id="simp" data-config='{"shide_top":false,"shide_btm":false,"auto_load":false}'>
 
 <div class="simp-playlist">

<li>
<span class="simp-source" data-src="">

</li>

</div>

</div>

                  




    
    </div>
  </div>
</div>
</div>

<div class="shell">
  <div class="container">
 

    <div class="row">
    @foreach($audio  as $data)
      <div class="col-md-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
           
            <img src="{{ url('uploads/audio/image/'.$data->image_path) }}" >
          </div>
          <div class="wsk-cp-text">
                         

          
            <div class="category">
           
          
              <span>Play Audio </span>
            </div>
            
            <div class="title-product">
             
                <h5> Name:{{ $data->heading_name }}</h5>
                <h5> ID:{{ $data->id}}</h5>
            </div>
            <div class="description-prod">
             <h5> Desription:{{ $data->description }}</h5>
     
            </div>
           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MP3 adddddddddddddddd</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="container-fluid">
<link rel="stylesheet" href="/css/card/audio2.css" >

  <div class="simple-audio-player" id="simp" data-config='{"shide_top":false,"shide_btm":false,"auto_load":false}'>
 
 <div class="simp-playlist">
   <ul>

     
       <li>
         <span class="simp-source" data-src="{{ asset('uploads/audio/mp3/'.$data->mp3url) }}">
      </span>
      
       <img src="{{ url('uploads/audio/image/'.$data->image_path) }}" width="150px">
 
     </li>
       
   
     </ul>
 
  
   </div>
   <div class="simp-footer">Made with  💖 &amp; 🙌 by <a href="#" target="_blank" title="Sekedus">Sumith indika</a></div>
 </div>
 





  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

 
          </div>
        </div>
      </div>
     
      @endforeach
     
    </div>
  
  

  </div>
</div>

        
</body>
</html>




