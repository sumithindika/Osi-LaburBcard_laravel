@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">
    
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Groups Edit
      <span>/</span>
      
      
    </h6>
    <a href="{{url('group')}}" class="btn btn-danger  py-2 float-right">Back</a>
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

             <form action="{{url('group-update/'.$group->id)}}" method="POST">
             {{ csrf_field() }}
             @method('PUT')
                 
               
           <div class="row">
             
              <div class="col-md-12">
              
                   <div class="form-group">
                   <label for="">Name</label>
                   <input type="text" name="name" value="{{$group->name}}" class="form-control" placeholder="Enter Name">
                  </div>
               </div>
               <div class="col-md-12">
                   
                   <div class="form-group">
                   <label for="">URL</label>
                   <input type="text" name="url" value="{{$group->url}}" class="form-control" placeholder="Enter Url">
                  </div>
               </div>

                <div class="col-md-12">
                   
                   <div class="form-group">
                      <label for="">Description</label>
                      <textarea rows="4" class="form-control" name="description" placeholder="Enter Description">{{$group->description}}</textarea>
                     </div>
               </div>

                   <div class="col-md-12">
                       <div class="form-group">
                       <label for="">Show / Hide</label>
                        <input type="checkbox" name="status" class="" value="{{ $group->status == '1' ? 'checked' : ''}}">
                       </div>


                   </div>

                <div class="col-md-12">
                   
                    <div class="form-group">
                        
                         <button type="submit" class="btn btn-primary">Update</button>
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