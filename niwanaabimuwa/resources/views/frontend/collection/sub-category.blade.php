@extends('layouts.frontend')

@section('title')
collection - category - SubCategory
@endsection

@section('content')
      

    <div class="container-fluid card card-body">

        <div class="row">
            <div class="col-md-12">
           
                <label for="">collection/ {{$category->group->name}} / {{$category->name}}</label>

            </div>



      </div>


 </div>
 
                
  <style>

</style>
<div class="container inline-flex p-2" style="margin-top:45px;">
        <div class="row">
                 <div class="col-md-12 inline-flex">
               
                   <div class="row">
                   @foreach ($subcategory as $subcat_item )
                         <div class="col-md-3 mb-4">

                         <a href="{{url('collection/'.$subcat_item->category->group->url.'/'.$subcat_item->category->url.'/'.$subcat_item->url)}}" class="text-center">
                           <div class="card p-3  box-shadow mb-2 mr-4">
                           <img src="{{ asset('uploads/subcategoryimage/'.$subcat_item->image)}}" class="w-100"   alt="image" />
                            
                           <div class="card-body bg-light">

                             <h6 class="mb-0">{{$subcat_item->name}}</h6>

                             </div>

                        </div>
                         </a>


                   </div>

                         @endforeach
                   </div>

                 </div>
      
</div>


</div>





@endsection