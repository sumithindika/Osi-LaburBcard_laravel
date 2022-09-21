<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="/css/audio.css" >


<div class="simple-audio-player" id="simp" data-config='{"shide_top":false,"shide_btm":false,"auto_load":false}'>
 
<div class="simp-playlist">
  <ul>
    @foreach ($audio as $item )
    
      <li>
        <span class="simp-source" data-src="{{ asset('audio/mp3/'.$item->mp3url) }}">
      {{ url('$item->heading_name') }}</span>
     
      <img src="{{ url('audio/image/'.$item->image_path) }}" width="150px">

      <span class="simp-desc">{{ url('$item->description') }}</span>
    </li>
      
      @endforeach
    </ul>

 
  </div>
  <div class="simp-footer">Made with  💖 &amp; 🙌 by <a href="#" target="_blank" title="Sekedus">Sumith indika</a></div>
</div>

<script type="text/javascript" src="/js/audio.js"></script>



