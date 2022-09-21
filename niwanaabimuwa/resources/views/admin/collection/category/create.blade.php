@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">


<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Category-Form
      <span>/</span>
      
      
    </h6>
   
  </div>
</div>

<div class="row">
       <div class="col-md-12">
          <div class="card">
             <div class="card-body">

              @if(session('status'))
                 <div class="alert alert-success" role="alert">
                {{session('status')}}
                 </div>
               @endif
               
             <form action="{{ url('category-store') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      
                      <div class="row">
                  
                   <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Group ID (Name)</label>
                        <select class="form-control" name="group_id">
                           <option value="">Select</option>
                    
                           @foreach ($group as $gitem)
                               
                     
                           <option value="{{$gitem->id}}">{{$gitem->name}}</option>
                           @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">URL</label>
                        <input type="text" name="url"  class="form-control" placeholder="Enter Name">
                        </div>
                    </div>

                     <div class="col-md-12">
                        
                        <div class="form-group">
                           <label for="">Description</label>
                           <textarea rows="4" class="form-control" name="description" placeholder="Enter Description"></textarea>
                          </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="category_img" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Icon</label>
                        <input type="file" name="category_icon" class="form-control">
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="">Show / Hide</label>
                             <input type="checkbox" name="status" class="" >
                            </div>


                        </div>

                     <div class="col-md-12">
                        
                         <div class="form-group">
                             
                              <button type="submit" class="btn btn-primary" >Save</button>
                          </div>
                     </div>
                    </div>

                    
                 </form>
          </div>

       </div>
   </div>




</div>


</div>

@endsection