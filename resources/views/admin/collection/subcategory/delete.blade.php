@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Sub Category Delete
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
                   <img src="{{ asset('uploads/subcategoryimage/'.$item->image)}}"  width="100px"   alt="image" />


                </td>
               

                <td>
                <input type="checkbox" {{ $item->status == '1' ? 'checked' : '' }}  >
                </td>
                
                <td>
                  
                  <a href="{{url('subcategory-re-store/'.$item->id)}}" class="badge btn-danger">Re Store</a>
               
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