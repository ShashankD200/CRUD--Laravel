@extends('welcome')

@section('form')
    <div class="container-fluid w-25 mt-5 bg-light p-3 border rounded shadow">
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>

        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <h2>Recover Password </h2>
        <form action="{{route ('check_user') }}" method="post">
            @csrf
            <label for="name">Enter email :</label>
            <input type="text" class="form-control mt-2"name="email" id="password"required placeholder="Email Address">
            @if (session('success'))
      <label for="name">Enter Password :</label>
            <input type="password" class="form-control mt-2"name="password" id="password" placeholder="Password" > 
        @endif
            
            <input type="submit" class="btn btn-primary mt-2" value="Submit">
        </form>
        
    </div>
@endsection
