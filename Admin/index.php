<?php
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <?php
 include("include/header.php");
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
 include("include/sidebar.php");
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Arrival Date</th>
                        <th>Departure Date</th>
                        <th>Adults</th>
                        <th>Children</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                         $sql=mysqli_query($conn,"SELECT * FROM check_in");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                          
                          <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['mobile_number'];?></td>
                            <td><?php echo $row['arrival_date'];?></td>
                            <td><?php echo $row['departure_date'];?></td>
                            <td><?php echo $row['adults'];?></td>
                            <td><?php echo $row['children'];?></td>
                          </tr>
                          <?php $count++; }  ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
  include("include/footer.php");
  ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>


  <!-- ./Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Activites</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <!-- Date -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-12">
                        <!-- Date and time -->
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <!-- Date and time -->
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" id="inputimg"
                      accept="image/jpg,image/png,image/svg,image/webp,image/jpeg,image/pdf" placeholder="image">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Short Content</label>
                    <textarea id="content" rows="3" class="form-control" name="scontent" required></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Full Content</label>
                    <textarea id="content" rows="6" class="form-control" name="fcontent" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row col-12">
                <div class="col-6">
                  <div class="form-group">
                    <label for="inputName">Price 1</label>
                    <input type="number" name="price1" class="form-control" id="inputfname" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="inputName">Price 2</label>
                    <input type="number" name="price2" class="form-control" id="inputName">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>
                <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="sub"
                  style="margin-right: 5px;">Submit </button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="https://kit.fontawesome.com/647fa1a49e.js" crossorigin="anonymous"></script>
</body>
</html>
