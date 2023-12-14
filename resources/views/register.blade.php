@extends('welcome')

@section('form')
    <div class="container-fluid w-25 d-flex flex-column mt-5 bg-light p-3 border rounded shadow">
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <h2 class="mb-3">Register</h2>
        <form action="{{route ('register') }}" method="post" class="mb-3">
            @csrf
            <label for="name">Enter email :</label>
            <input type="text" class="form-control mt-2"name="email" id="email"required placeholder="Email Address">
            <label for="name">Enter Password :</label>
            <input type="password" class="form-control mt-2"name="password" id="password" placeholder="Password" required>
            <input type="submit" class="w-100 btn btn-primary mt-2" value="Register">
        </form>
       
       <span class="mx-auto">Already a user? <a href="{{route('Loginform')}}">Login</a></span>
    </div>
@endsection
