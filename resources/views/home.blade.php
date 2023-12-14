@extends('welcome')

@section('landing')



<section class="hero text-center p-5 grey " style="height:300px;">
    <div class="container">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">Your catchy tagline goes here.</p>
<a class="btn dark-color" href="{{route('add-student')}}">Add Student </a>
  
    </div>
</section>





@endsection