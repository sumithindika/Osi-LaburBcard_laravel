@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Groups Edit
      <span>/</span>
      
      
    </h6>
    <a href="{{url('group-add')}}" class="badge btn btn-primary text-white py-2 float-right">Add Group</a>
    <a href="{{url('group-deleted-record')}}" class="badge btn btn-danger text-white  py-2  float-right">Deleted Record</a>

  </div>
</div>








   
<!-- Heading -->

<div class="row">
   <div class="col-md-12">

<div class="card">

<div class="card-body">



      <table class="table table-striped table-bordered">
       <thead>
       <th>ID</th>
      <th>Name</th>
      <th>Description</th>
       <th>Show/Hide</th>
      <th>Action</th>

      </thead>
         <tbody>
             @foreach ($group as $item)
          <tr>
               <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>
                <input type="checkbox" {{ $item->status == '1' ? 'checked' : '' }}  >
                </td>
                <td>
                    <a href="{{url('group-edit/'.$item->id)}}" class="badge btn-primary">Edit</a>
                    <a href="{{url('group-delete/'.$item->id)}}" class="badge btn-danger">Delete</a>
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