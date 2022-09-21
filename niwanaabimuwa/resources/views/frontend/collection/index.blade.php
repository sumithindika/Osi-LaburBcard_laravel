@extends('layouts.frontend')

@section('title')
collection
@endsection

@section('content')
          <section class="py-5">
              <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                      <div class="card">
                         <div class="card-header">
                           <h5> collection / Group</h5>


                         </div>
                           <div class="card-body">
                           @foreach ($group as $item )

                           <a href="{{url('Collection/'.$item->url)}}" class=" btn btn-info px-3  mx-3">
                           {{$item->name}}</a>
                           
                           @endforeach

                           </div>



                      </div>
                   

                     </div>


                  </div>


              </div>
          </section>


@endsection