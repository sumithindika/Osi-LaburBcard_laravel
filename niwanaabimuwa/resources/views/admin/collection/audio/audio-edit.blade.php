@extends('layouts.admin')

@section('content')

     <div class="container mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Edit Audio 
      <span>/</span>
      
      
    </h6>
    <a href="{{url('home-audio')}}" class="btn btn-danger btn-sm float-right">Back</a>
   
   </div>
</div>

     <div class="row mt-3">
        <div class="col md-12">
          <div class="card">
        

            <div class="card-body">
 
              @if(session('status'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('status')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              
              @endif

          <form action="{{url('update-audio/'.$audio->id)}}" enctype="multipart/form-data" method="POST">
                
          @csrf
          @method('PUT')    

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" role="tab" >Audio</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab">Status</a>
            </li>
          
          </ul>

          <div class="tab-content border p-3" id="myTabContent">
                <div class="tab-pane fade show active" id="product" role="tabpanel">
     

                
          <div class="col-md-6">
              <div class="form-group">
                <label for="">url</label>
               <input class="form-control" value="{{$audio->url}}" type="text" name="url">
        </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label for="">Heading Name</label>
               <input class="form-control" value="{{$audio->heading_name}}" type="text" name="heading_name">
        </div>
          </div>


          <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Select Sub category (ex: Brands)</label>
                       <select name="sub_category_id" class="form-control"  required>
                          <option value="{{$audio->sub_category_id}}"> {{$audio->subcategory->name}} </option>
                   
                          @foreach ($subcategory as $catitem)
                              
                    
                          <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                          @endforeach
                       </select>
                       </div>
                   </div>


          <div class="col-md-12">
             <div class="form-group">
              <label for="">Description</label>
           <textarea class="form-control"  name="description">{{ $audio->description}}</textarea>
        </div>
        </div>
            

           
                  <div class="col-md-12">
                   <div class="form-group">
                    <label for="">Audio Mp3 Upload</label>
                   <input class="form-control" type="file"  name="mp3url">
                 
               </div>
               </div>

               <div class="col-md-12">
                     <div class="form-group">
                    <label for=""> Image Uploard</label>
                   <input class="form-control"  type="file" name="image_path">
                   <img src="{{ asset('uploads/audio/image/'.$audio->image_path) }}" alt="image" width="100px"/>
                  </div>
               </div>

     </div>
   
        
           
           
               <div class="tab-pane fade show " id="status" role="tabpanel">
                
               <div class="row">

           <div class="col-md-3">
              <div class="form-group">
                <label for="">New Audio Arrival</label>
               <input  type="checkbox" class="form-control" name="new_arrival_products" {{$audio->new_arrival_products == '1' ? 'checked' :''}} >
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="">Populer Audio Product</label>
               <input type="checkbox" class="form-control" name="populer_products" {{$audio->populer_products == '1' ? 'checked' :''}} >
              </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
                <label for="">Old Audio Product</label>
               <input type="checkbox" class="form-control" name="old_products" {{$audio->old_products == '1' ? 'checked' :''}} >
                  </div>
          </div>

          <div class="col-md-3">
              <div class="form-group">
              <label for="">Show/Hide</label>
               <input type="checkbox"  type="checkbox" name="status"  {{$audio->status == '1' ? 'checked' :''}}> 
               </div>
           </div>



               </div>
             </div>

      

             <div class="form-group col-md-3 text-right"> 
             
               <button type="submit" class="btn btn-primary">Update</button>
          </div>

          </div>
          </form>

  

            </div>


           </div>
        </div>
     </div>
   </div>



@endsection