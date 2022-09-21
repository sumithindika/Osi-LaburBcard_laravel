@extends('layouts.admin')

@section('content')

     <div class="container mt-5">

        <div class="col md-12">

            @if(session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}
              </div>
            @endif

          <div class="card">
          <div class="card-header">
             <h4> Edit Slider

              <a href="{{url('home-slider')}}" class="btn btn-danger btn-sm float-right">Back</a>
             </h4>
          </div>

            <div class="card-body">
          <form action="{{ url('update-slider/'.$slider->id) }}" enctype="multipart/form-data" method="POST">
                
          @csrf
          @method('PUT')

              <div class="form-group">
                <label for="">Heading</label>
               <input class="form-control" type="text" value="{{$slider->heading}}" name="heading">
        </div>

             <div class="form-group">
              <label for="">Description</label>
           <input class="form-control" type="text" name="description" value="{{ $slider->description }}"></input>
        </div>

            

              <div class="form-group">
              <label for="">Link</label>
           <input class="form-control" type="text" value="{{$slider->link}}"  name="link">
        </div>

                <div class="form-group">
                   <label for="">Link Name</label>
                 <input class="form-control" type="text" value="{{$slider->link_name}}" name="link_name">
             </div>

                   <div class="form-group">
                    <label for="">Slider Image Uploard</label>
                   <input class="form-control" type="file" name="image">
                   
                   <image src="{{ asset('uploads/slider/'.$slider->image) }}" width="100px" alt="slider-image">
               </div>
            
              <div class="form-group">
              <label for="">Status</label>
           <input  type="checkbox" name="status" {{$slider->status == '1' ? 'checked':'' }} > 0=visible, 1=hidden 
           </div>
               
              <div class="form-group">
               <button type="submit" class="btn btn-primary">Submit</button>
          </div>


          </form>

            </div>




           </div>
        </div>
   </div>



@endsection