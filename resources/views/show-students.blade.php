@extends('welcome')

@section('show-students')
<div class="container-fluid w-50 mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Birth</th> 
            <th>Action</th> 
            </tr>
           
        </thead>
        <tbody>
          <?php $sn = 0; ?>
            @foreach($data as $data)
            <?php  $sn++; ?>
            <tr>
<td>{{$sn}}</td>
<td>{{$data->name}}</td>
<td>{{$data->email}}</td>
<td>{{$data->dob}}</td>
<td>
    <button data-id="{{ $data->id }}" class="btn dark-color editStudents" data-route="{{ route('get_student') }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Edit</button>
    <button data-id="{{ $data->id }}" data-route="{{ route('delete_student') }}" class="btn btn-danger DeleteStudents">Delete</button>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="student_detail" method="post">
@csrf
        <label for="name">Student name :</label>
        <input type="text" name="sname" id="sname" class=" mt-2 form-control">
          <input type="hidden" name="sid" id="sid">
        <label for="email">Student Email :</label>
        <input type="email" name="semail" id="semail" class=" mt-2 form-control">

        <label for="name">Student DOB :</label>
        <input type="date" name="sdob" id="sdob" class=" mt-2 form-control">



      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" data-route="{{route('update_students')}}"class="btn btn-primary" id="update_students">Update</button>
      </div>
    </div>
  </div>
</div>

@endsection