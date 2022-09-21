@extends('layouts.frontend')

@section('title')
collection - category
@endsection

@section('content')
<style>
  </style>
<section class="py-3">
<div class="container" style="margin-top:45px;">
        <div class="row">
                 <div class="col-md-12">

                   <div class="row">
                   @foreach ($category as $cat_item )
                   <div class="col-md-3 mb-4">

                         <a href="{{url('collection/'.$cat_item->group->url.'/'.$cat_item->url)}}" class="text-center">

                           <div class="card" style="width: 18rem;">
                           <img src="{{ asset('uploads/categoryimage/'.$cat_item->image)}}" class="card-img-top img-fluid embed-responsive embed-responsive-16by9" style="width: 18rem; height: 20rem;"  alt="" />
                            
                           <div class="card-body bg-info">

                             <h6 class="mb-0 text-center text-white">{{$cat_item->name}}</h6>

                             </div>

                        </div>
                         </a>


                   </div>

                         @endforeach
                   </div>

                 </div>
</div>


</div>


</section>


@endsection