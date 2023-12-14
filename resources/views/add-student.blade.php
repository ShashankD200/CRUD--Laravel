@extends('welcome')

@section('addstudent')
<div class="container mt-5 w-25  border grey shadow p-3 rounded">
    <h2>Add Student Details</h2>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{route('add-student-details')}}" method="POST" >
        @csrf
      <div class="mb-3">
        <label for="studentName" class="form-label">Student Name</label>
        <input type="text" class="form-control" name="studentName" placeholder="Enter name" required>
      </div>
      <div class="mb-3">
        <label for="studentEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" name="studentEmail" placeholder="name@example.com" required>
      </div>
      <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date"  class="form-control" name="dob" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
  </div>
@endsection