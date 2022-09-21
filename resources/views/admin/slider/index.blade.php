@extends('layouts.admin')

@section('content')

     <div class="container mt-5">

        <div class="col md-12">
          <div class="card">
          <div class="card-header">
             <h4>Slider

              <a href="{{url('add-slider')}}" class="btn btn-primary btn-sm float-right">add slider</a>
             </h4>
          </div>

            <div class="card-body">
           <table class="table table-bordered">
            <thead>
             <tr>
                  <th>ID</th>
                  <th>Heding</th>
                  <th>Image</th>
                  <th>Ststus</th>
                  <th>Edit</th>
             </tr>

            </thead>
                <tbody>
                @foreach ($slider as $item )
                 <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->heading}}</td>
                    <td>{{$item->image}}
                       <image src="{{ asset('uploads/slider/'.$item->image) }}" width="100px" alt="slider-image">
                       </td>
                    <td>
                      @if ($item->status == '1')
                         hidden
                         @else
                             visible
                      @endif

                    </td>
                   <td>
                     <a href="{{ url('edit-slider/'.$item->id) }}" class="btn btn-success btn-sm">Edit

                   </td>
                 </tr>

                 @endforeach
                 
                </tbody>



           </table>


            </div>




           </div>
        </div>
   </div>



@endsection