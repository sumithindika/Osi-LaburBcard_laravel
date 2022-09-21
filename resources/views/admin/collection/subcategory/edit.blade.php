@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">
     <div class="card mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
           <h6 class="mb-2 mb-sm-0 pt-1">
                   Collection / Edit- Sub Category
            <span>/</span>
          </h6>
          <a href="{{url('sub-category')}}" class="btn btn-danger  py-2 float-right">Back</a>
      </div>
   </div>


            <div class="row">
            <div class="col-md-12">

            
            <div class="card">

            <div class="card-body">

            <form action="{{ url('sub-category-update/'.$subcategory->id) }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
            
                      @method('PUT')
              <div class="row">
                  
                  <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Category ID (Name)</label>
                       <select class="form-control" name="category_id">
                          <option value="{{$subcategory->category_id}}">{{$subcategory->category->name}}</option>
                   
                          @foreach ($category as $catitem)
                              
                    
                          <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                          @endforeach
                       </select>
                       </div>
                   </div>


                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">URL</label>
                       <input type="text" name="url" value="{{$subcategory->url}}" class="form-control" placeholder="Enter Name">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Name</label>
                       <input type="text" name="name" value="{{$subcategory->name}}" class="form-control" placeholder="Enter Name">
                       </div>
                   </div>

                    <div class="col-md-12">
                       
                       <div class="form-group">
                          <label for="">Description</label>
                          <textarea rows="4" class="form-control" name="description"   placeholder="Enter Description">{{$subcategory->description}}</textarea>
                         </div>
                   </div>


                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Image</label>
                       <input type="file" name="image" class="form-control">
                       <img src="{{ asset('uploads/subcategoryimage/'.$subcategory->image)}}"  width="100px"   alt="image" />
                       </div>
                   </div>
                   
                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Peiority</label>
                       <input type="number" name="peiority"  value="{{$subcategory->peiority}}"  class="form-control" placeholder="Enter peiority">
                          
                    </div>
                   </div>
                 
                       <div class="col-md-12">
                           <div class="form-group">
                           <label for="">Show / Hide</label>
                            <input type="checkbox" name="status"  value="{{$subcategory->status == '1' ? 'chacked':''}}"  class="" >
                           </div>


                       </div>
                       <div class="col-md-12">
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