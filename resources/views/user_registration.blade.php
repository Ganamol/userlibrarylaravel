<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-8">
            {{-- <h1>General Form</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <center>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Registration form</h3>
              </div>
              <!-- /.card-header -->
             
              <!-- form start -->
              <form method="POST" action="{{route('userregistration')}}" enctype="mutlipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="date" class="form-control" name="date_of_birth" id="exampleInputEmail1" placeholder="Enter dateofbirth">
                  </div>
                  <div class="custom-control custom-radio">
                  <div class="form-group">
                    <label for="">Gender</label> 
                    <input  type="radio" id="" name="gender" value="male">Male<input   type="radio" id="" name="gender" value="female">Female
                 
                  </div></div>
                  </div>
                  <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="qualification">
                      <option>SSLC</option>
                      <option>PLUS TWO</option>
                      <option>DEGREE</option>
                      <option>POST GRADUATION</option>
                      </select>
                  </div>
                  <label>Hobbies</label>
                  <div class="form-group">
                  <table>
                    <tr>

                  <td> <input type="checkbox"  name="category[]"  value="Cricket"><label >Cricket<label></label></td>
                 <div></div>  <td> <input type="checkbox" name="category[]" value="Tennis"><label>Tennis<label></td>
                   
                 <div></div>  <td> <input type="checkbox" name="category[]" value="Football"><label>Football<label></td>
                   
               
                </tr>
                  </table>
                     
                  
                      
                       
                  </div>
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Describe Yourself...</label>
                    <textarea class="form-control" rows="3" name="myself" placeholder="Enter ...">Myself</textarea>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name="image" value="name" class="custom-file-input" id="exampleInputFile">
 
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      {{-- <div class="input-group-append">
                        <img src="" alt="">
                        <span class="input-group-text">Upload</span>
                      </div> --}}
                    </div>
                 
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <center>
                 
               </center> </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</center>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
