@extends('layouts.admin')

@section('content')

     <div class="container mt-5">
<!-- Heading -->
     <div class="card mb-4 wow fadeIn">
  <div class="card-body d-sm-flex justify-content-between">
     <h6 class="mb-2 mb-sm-0 pt-1">
     Collection / Audio
      <span>/</span>
      
      
    </h6>
    <a href="{{url('add-audio')}}" class="btn btn-primary  py-2  float-right">add Dharmadeshana</a>
    <a href="#" class="badge btn btn-danger text-white  py-2  float-right">Deleted Record</a>
 
   </div>
</div>






        <div class="row">
        <div class="col md-12">
          <div class="card">
          

            <div class="card-body">
            <table class="table table-bordered">
            <thead>
             <tr>
                  <th>ID</th>
                  <th>Heding_name</th>
                  <th>SubCategory-name</th>
                  <th>description</th>
                  <th>Mp3</th>
                  <th>image_path</th>
                  <th>Ststus</th>
                  <th>Edit</th>
             </tr>

            </thead>
                <tbody>
                @foreach ($audio as $item )
                 <tr>
                    <td>{{$item->id}}</td>

                    <td>{{$item->heading_name}}</td>
                    <td>{{$item->subcategory->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->mp3url}}
                       <a src="{{ asset('uploads/audio/mp3/'.$item->mp3url) }}" alt="mp3"></a>
                       </td>
                    

                    <td>{{$item->image_path}}
                       <image src="{{ asset('uploads/audio/image/'.$item->image_path) }}" width="100px" alt="image">
                       </td>

                    <td>
                      @if ($item->status == '1')
                         hidden
                         @else
                             visible
                      @endif

                    </td>

                   <td>
                     <a href="{{ url('edit-audio/'.$item->id) }}" class="btn btn-success btn-sm badge">Edit
                     <a href="{{ url('delete-audio/'.$item->id) }}" class="btn btn-success btn-sm badge">Delete

                   </td>
                 </tr>

                 @endforeach
                 
                </tbody>



           </table>


     </div>

        </div>
      </div>
   </div>
</div> 
               
@endsection