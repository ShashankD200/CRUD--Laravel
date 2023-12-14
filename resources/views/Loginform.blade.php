@extends('welcome')

@section('form')
    <div class="container-fluid w-25 mt-5 bg-light p-3 d-flex   border rounded shadow flex-column">
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <h2 class="mb-3">Login</h2>
        <form action="{{route ('submit') }}" method="post">
            @csrf
            <label for="name">Enter email :</label>
            <input type="text" class="form-control mt-2"name="email" id="password"required placeholder="Email Address">
            <label for="name">Enter Password :</label>
            <input type="password" class="form-control mt-2"name="password" id="password" placeholder="Password" required>
       
            <input type="submit" class="btn btn-primary w-100 mt-3" value="Login"> 
    
         
        </form>
        <div class="mt-3 mx-auto">
        <a href="{{route('forgotPassword')}}" class="text-danger">Forgot Password?</a><br>
        <a href="{{route('register')}}" >Create an account </a>
        </div>
        
    </div>
@endsection
