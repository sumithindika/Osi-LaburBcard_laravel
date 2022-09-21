@extends('layouts.admin')
@section('content')

<div class="container-fluid mt-5">

<div class="card mb-4 wow fadeIn">
<div class="card-body d-sm-flex justify-content-between">

    <h4 class="mb-2 mb-sm-0 pt-1">
   <span>Registered User - Edit Role</span>
    </h4>
  </div>

</div>

<!-- Heading -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}
              </div>

            
            @endif




              <h4>Current role : {{ $user_roles->role_as}}</h4>
                <h5>
                  Is Ban status:
                @if($user_roles->isban== '0')
                 <label class="py-2 px-3  badge btn-primary">Not Banned</label>
              

               @elseif($user_roles->isban== '1')
               <label class="py-2 px-3 badge btn-danger">Banned</label>

            @endif


                </h5>
                <form action="{{url('role-update/'.$user_roles->id)}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
        <div class="form-group">
           <input class="form-control" type="text" name="name" value="{{ $user_roles ->name}}">

        </div>
      
        <div class="form-group">
           <input class="form-control" type="email" name="email"  readonly value="{{ $user_roles ->email}}">

        </div>
        <div class="form-group"> 
           <select name="roles" class="form-control">
           <option value="">Select Roles..</option>
            <option value="">Default</option>
            <option value="admin">admin</option>
            <option value="vendor">Vendor</option>
           </select>
 <br>
        </div>


        <div class="form-group"> 
           <select name="isban" class="form-control">
           <option value="">Select Ban and Un-Ban</option>
            
            <option value="0">Un-Ban</option>
            <option value="1">Ban Now</option>
           </select>
 
        </div>

          <div class="form-group">
          <button type="submit" class="btn btn-primary">Update</button>
          </div>

          </form>

            </div>
          
        </div>
    </div>

    


            </div>
        

</div>

@endsection  