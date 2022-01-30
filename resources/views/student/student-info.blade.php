
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>
{{-- @section('content') --}}
<body>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Student  </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <button class="btn btn-success"data-toggle="modal" data-target="#studentAdd">Add New</button>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="dt-cell-sellection" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">


            <thead>
              <tr>
                <th scope="col">SL No</th>
                <th scope="col">Roll</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student as  $key=>$row )
              <tr> 
                <td>{{$key+1}}</td>
                <th scope="row">{{ $row->student_roll }}</th>
                <td>{{ $row->student_name }}</td>
                <td>{{ $row->student_class }}</td>
                {{-- <td>{{ $row->student_phone }}</td> --}}
                <td><img src="{{ asset($row->student_img)}}" height="40" width="70"></td>
               <td>
                <a href="#" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#editmodal{{ $row->id }}"   ><i class="fas fa-edit"></i></a>
                <a href="{{ route('student.delete',$row->id) }}" class="btn btn-danger btn-sm #delete" ><i class="fas fa-trash"></i></a>
                <a href="#" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#viewModal{{ $row->id }}" > <i class="far fa-eye"></i></i></a>



                <div class="modal fade" id="viewModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Student Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <form action="" method="Post" enctype="multipart/form-data">
                          @csrf
                        <div class="modal-body">
                          <img src="{{ asset($row->student_img)}}" height="40" width="70">
                            <h3>Name : {{ $row->student_name }}</h3>
                            <h5> Roll : {{  $row->student_roll  }}</h5>
                            <h5> Phone : {{  $row->student_phone  }}</h5>
                            <h5> Class : {{  $row->student_class  }}</h5>
                            <h5> Class : {{  $row->student_age  }}</h5>
                            <h5> Roll : {{  $row->student_email  }}</h5>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          {{-- <button type="Submit" class="btn btn-primary">Submit</button> --}}
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
                </div>



<!-- Edit Student Modal -->
<div class="modal fade" id="editmodal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-center">Update  Student Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form class="m-2 "  action="" method="post" >
          @csrf
         
          <div class="form-group p-2">
             <label for="">Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="student_name" value="{{ $row->student_name }}" placeholder=" student name">
          </div>
       <div class="form-group p-2">
              <label for="">Roll</label>
             <input type="number" class="form-control" id="" aria-describedby="" name="student_roll"  value="{{ $row->student_roll }}" placeholder=" student Roll">
           </div> 
           <div class="form-group p-2">
              <label for="">Class</label>
             <input type="number" class="form-control" id="" aria-describedby="" name="student_class"  value="{{ $row->student_class }}" placeholder=" student Class">
           </div>
           <div class="form-group p-2">
              <label for="">Age</label>
             <input type="number" class="form-control" id="" aria-describedby="" name="student_age"  value="{{ $row->student_age }}" placeholder=" student Age">
           </div>
           <div class="form-group p-2">
              <label for="">Phone Number</label>
             <input type="text" class="form-control" id="" aria-describedby="" name="student_phone"  value="{{$row->student_phone}}" placeholder=" student Phone">
           </div>
           <div class="form-group p-2">
              <label for="">Email</label>
             <input type="email" class="form-control" id="" aria-describedby="" name="student_email"  value="{{ $row->student_email }}" placeholder=" student Email">
           </div>
           <div class="form-group p-2" >
              <label for="">Image</label>
             <input type="file" class="form-control" id="" aria-describedby=""  name="student_img" placeholder=" student Email">
           </div>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  type="submit" class="btn btn-primary  text-center ">Update Data</button>
        </form> 
      </div>
    
    </div>
  </div>
</div>



                
                    </td>
              </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
  </div>
</div>
</div>
</div>
</section>
</div>
</div>


</div>
</div>


<!-- Add Student Modal -->
<div class="modal fade" id="studentAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-center">Add New Student</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form class="m-2 "  action="{{route('student.store')}}" method="post" >
          @csrf
         
          <div class="form-group p-2">
             <label for="">Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="student_name" placeholder=" student name">
          </div>
       <div class="form-group p-2">
              <label for="">Roll</label>
             <input type="number" class="form-control" id="" aria-describedby="" name="student_roll" placeholder=" student Roll">
           </div> 
           <div class="form-group p-2">
              <label for="">Class</label>
             <input type="number" class="form-control" id="" aria-describedby="" name="student_class" placeholder=" student Class">
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
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  type="submit" class="btn btn-primary  text-center ">Submit</button>
        </form> 
      </div>
    
    </div>
  </div>
</div>




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script type="text/javascript">

// $(document).ready(function () {
//   $('#dtBasicExample').DataTable();
//   $('.dataTables_length').addClass('bs-select');
// });
// // Basic example
// $(document).ready(function () {
//   $('#dtBasicExample').DataTable({
//     "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
//   });
//   $('.dataTables_length').addClass('bs-select');
// });

$(document).ready(function () {
  $('#dt-cell-sellection').dataTable({

    select: {
      style: 'os',
      items: 'cell'
    }
  });
});
</script>


{{-- @endsection --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

