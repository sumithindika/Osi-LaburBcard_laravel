<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 <title>
@yield('title') | niwanaabimuwa
 </title>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB css link -->

<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>


<link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>




<!-- MDB -->
</head>

<body>
@include('partials.frontnavbar')


<main>

@yield('content')
</main>


    

@include('partials.footer')




<script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('assets/js/mdb.js')}}"></script>  
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>


</body>
</html>