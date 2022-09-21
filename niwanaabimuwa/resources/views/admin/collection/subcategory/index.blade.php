@extends('layouts.admin')

@section('content')

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ url('sub-category-store') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}


      <div class="modal-body">
         
             <div class="row">
                  
                  <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Category ID (Name)</label>
                       <select class="form-control" name="category_id">
                          <option value="">Select</option>
                   
                          @foreach ($category as $catitem)
                              
                    
                          <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                          @endforeach
                       </select>
                       </div>
                   </div>


                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">URL</label>
                       <input type="text" name="url" class="form-control" placeholder="Enter URL">
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Name</label>
                       <input type="text" name="name" class="form-control" placeholder="Enter Name">
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
                       <input type="file" name="image" class="form-control">
                       </div>
                   </div>
                   
                   <div class="col-md-6">
                       <div class="form-group">
                       <label for="">Peiority</label>
                       <input type="number" name="peiority" class="form-control" placeholder="Enter peiority">
                       </div>
                   </div>
                 
                       <div class="col-md-12">
                           <div class="form-group">
                           <label for="">Show / Hide</label>
                            <input type="checkbox" name="status" class="" >
                           </div>


                       </div>
                   </div>

             </div>
     
     
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

      </form>




    </div>
  </div>
</div>


<!-- Modal -->



<div class="container-fluid mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Sub Category
      <span>/</span>
      
      
    </h6>

    <a href="#" type="submit" data-toggle="modal" data-target="#exampleModal" class="badge btn btn-primary text-white py-2 float-right">Add Sub-Category</a>
    <a href="{{url('subcategory-delete-record')}}"  class="badge btn btn-danger text-white  py-2  float-right">Deleted Record</a>

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


      <table class="table table-striped table-bordered">
       <thead>
       <th>ID</th>
      <th>Name</th>
      <th>Category Name</th>
      <th>image</th>
       <th>Show/Hide</th>
      <th>Action</th>

      </thead>
         <tbody>
             @foreach ($subcategory as $item)
          <tr>
               <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
             
                <td>
                   <img src="{{ asset('uploads/subcategoryimage/'.$item->image)}}"  width="50px"   alt="image" />


                </td>
               

                <td>
                <input type="checkbox" {{ $item->status == '1' ? 'checked' : '' }}  >
                </td>
                <td>
                    <a href="{{url('subcategory-edit/'.$item->id)}}" class="badge btn-primary">Edit</a>
                    <a href="{{url('subcategory-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
                 </td>
           </tr>
          </tbody>
          @endforeach
         </table>
   
   
</div>

</div>
   
       
 </div>
</div>



</div>
@endsection