
{{-- @extends('layouts.manu') --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('tital')</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') }}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
@section('content')
<body>

<div class="container">
<div class="row">
    <div class=" col-md-8">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Roll</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            {{-- <tbody>
                @foreach ($student as $row )
              <tr> 
                <th scope="row">{{ $row->student_roll }}</th>
                <td>{{ $row->student_name }}</td>
                <td>{{ $row->student_class }}</td>
                <td>{{ $row->student_phone }}</td>
               <td>
                <a href="#" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#editModal" ><i class="fas fa-edit"></i></a>
                <a href="{{ route('student.delete',$row->id) }}" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
                <a href="#" class="btn btn-success btn-sm" > <i class="far fa-eye"></i></i></a>
                    </td>
              </tr> 
              @endforeach
            </tbody> --}}
          </table>
    </div>
    <div class="col-md-4">
        <form class="m-2 "  action="{{route('student.store')}}" method="post" >
            @csrf
            <h3 class="text-center">Add New Student</h3>
            <div class="form-group p-2">
               <label for="">Name</label>
              <input type="text" class="form-control" id="" aria-describedby="" name="student_name" placeholder=" student name">
            </div>
            {{-- <div class="form-group p-2">
                <label for="">Roll</label>
               <input type="number" class="form-control" id="" aria-describedby="" name="student_roll" placeholder=" student Roll">
             </div> --}}
             <div class="form-group p-2">
                <label for="">Class</label>
               <input type="text" class="form-control" id="" aria-describedby="" name="student_class" placeholder=" student Class">
             </div>
             <div class="form-group p-2">
                <label for="">Age</label>
               <input type="number" class="form-control" id="" aria-describedby="" name="student_age" placeholder=" student Age">
             </div>
             <div class="form-group p-2">
                <label for="">Phone Number</label>
               <input type="number" class="form-control" id="" aria-describedby="" name="student_phone" placeholder=" student Phone">
             </div>
             <div class="form-group p-2">
                <label for="">Email</label>
               <input type="email" class="form-control" id="" aria-describedby="" name="student_email" placeholder=" student Email">
             </div>
             <div class="form-group p-2" >
                <label for="">Image</label>
               <input type="file" class="form-control" id="" aria-describedby=""  name="student_img" placeholder=" student Email">
             </div>
            <button  type="submit" class="btn btn-primary btn-lg btn-block text-center ">Submit</button>
          </form>

    </div>

</div>
</div>


<!-- student  Insert Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>










@endsection
<script src="{{asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

