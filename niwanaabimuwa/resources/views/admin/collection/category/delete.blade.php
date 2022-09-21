@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">

<!-- Heading -->
<div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Category Delete Record
      <span>/</span>
      
      
    </h6>
   
  </div>
</div>


<div class="row">
   <div class="col-md-12">

   @if(session('status'))
                 <div class="alert alert-success" role="alert">
                {{session('status')}}
                 </div>

            
               @endif





<div class="card">

<div class="card-body">



      <table class="table table-striped table-bordered">
       <thead>
       <th>ID</th>
      <th>Name</th>
      <th>Group Name</th>
      
      <th>image</th>
      <th>icon</th>
       <th>Show/Hide</th>
      <th>Action</th>

      </thead>
         <tbody>
             @foreach ($category as $item)
          <tr>
               <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->group->name}}</td>
             
                <td>
                   <img src="{{ asset('uploads/categoryimage/'.$item->image)}}"  width="50px"   alt="image" />


                </td>
                <td>
                   <img src="{{ asset('uploads/categoryicon/'.$item->icon)}}"  width="50px"   alt="icon" />


                </td>

                <td>
                <input type="checkbox" {{ $item->status == '1' ? 'checked' : '' }}  >
                </td>
                <td>
                  
                    <a href="{{url('category-re-store/'.$item->id)}}" class="badge btn-danger">Re Store</a>
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