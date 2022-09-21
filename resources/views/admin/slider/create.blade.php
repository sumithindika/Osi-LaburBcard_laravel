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
             <h4> Add Slider

              <a href="{{url('home-slider')}}" class="btn btn-danger btn-sm float-right">Back</a>
             </h4>
          </div>

            <div class="card-body">
          <form action="{{url('store-slider')}}" enctype="multipart/form-data" method="POST">
                
          @csrf

              <div class="form-group">
                <label for="">Heading</label>
               <input class="form-control" type="text" name="heading">
        </div>

             <div class="form-group">
              <label for="">Description</label>
           <textarea class="form-control" name="description"></textarea>
        </div>

            

              <div class="form-group">
              <label for="">Link</label>
           <input class="form-control" type="text" name="link">
        </div>

                <div class="form-group">
                   <label for="">Link Name</label>
                 <input class="form-control" type="text" name="link_name">
             </div>

                   <div class="form-group">
                    <label for="">Slider Image Uploard</label>
                   <input class="form-control" type="file" name="image">
               </div>
            
              <div class="form-group">
              <label for="">Status</label>
               <input  type="checkbox" name="status"> 0=visible, 1=hidden 
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