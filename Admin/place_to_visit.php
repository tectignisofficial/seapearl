<?php
include("include/config.php");

if(isset($_POST['submit1'])){
  $category=$_POST['category'];
  $name=$_POST['name'];
  $content=mysqli_real_escape_string($conn,$_POST['content']);
  $img1=$_FILES['image1']['name'];
  $img2=$_FILES['image2']['name'];
  $filedet=$_FILES['image1']['tmp_name'];
  $location="dist/img/place-to-visit/".$img1;
  move_uploaded_file($filedet,$location);
  $filedet=$_FILES['image2']['tmp_name'];
  $location="dist/img/place-to-visit/".$img2;
  move_uploaded_file($filedet,$location);

  $sql=mysqli_query($conn,"INSERT INTO `place_to_visit`(`category`, `name`, `content`, `img1`, `img2`) VALUES ('$category','$name','$content','$img1','$img2')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:place_to_visit.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Place to Visit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->
    <?php
  include("include/header.php");
  ?>
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
              <h1 class="m-0">Place to Visit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Place to Visit</li>
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
                  <button type="button" class="btn btn-primary float-right " data-toggle="modal"
                    data-target="#exampleModal" style="margin-right: 5px;">+ Add Details</Details></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <div class="card col-12 pt-3">
                      <form action="" method="post">
                      <div class="row px-4">
                        <div class="col-8 my-3" style="padding-left:3%;">
                          <div class="row">
                            <label class="col-4">Select Category</label>
                            <div class="col-6">
                              <select class="form-control" name="category" id="category">
                                <option selected disabled>Select</option>
                                <option value="Beaches">Beaches</option>
                                <option value="">Temples</option>
                                <option value="">Malvan</option>
                                <option value="">Other</option>
                                <option value="">Airport</option>
                                <option value="">All</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 my-3" style="padding-right:15%;">
                          <button class="btn btn-primary" style="float:right" type="submit" name="submit2" id="submit"
                            value="submit">Submit</button>
                        </div>
                      </div>
                      </form>
                    </div>
                    <thead>
                      <tr>
                        <th>Sr</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>image 1</th>
                        <th>image 2</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['submit2'])){
$cat=$_POST['category'];
$sql=mysqli_query($conn,"SELECT * FROM place_to_visit where category='$cat'");
$count=1;
 while($row=mysqli_fetch_array($sql)){ ?>

  <tr>
  <td><?php echo $count;?></td>
  <td><?php echo $row['category'];?></td>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['content'];?></td>
  <td><img src="dist/img/place-to-visit/<?php echo $row['img1']; ?>" width="50px" alt="Alps"></td>
  <td><img src="dist/img/place-to-visit/<?php echo $row['img2']; ?>" width="50px" alt="Alps"></td>
</tr>
<?php $count++; } }else{ ?>
                       <?php  $sql=mysqli_query($conn,"SELECT * FROM place_to_visit");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>

                         <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['content'];?></td>
                            <td><img src="dist/img/place-to-visit/<?php echo $row['img1']; ?>" width="50px" alt="Alps"></td>
                            <td><img src="dist/img/place-to-visit/<?php echo $row['img2']; ?>" width="50px" alt="Alps"></td>
                          </tr>
                          <?php $count++; } } ?>

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
  <!-- ./wrapper -->

  <!-- ./Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Details</Details>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <!-- Date -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Category</label>
                          <select class="form-control" name="category" id="category">
                            <option selected disabled>Select</option>
                            <option value="Beaches">Beaches</option>
                            <option value="Temples">Temples</option>
                            <option value="Malvan">Malvan</option>
                            <option value="Other">Other</option>
                            <option value="Airport">Airport</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" required>
                    </div>
                  </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Content</label>
                      <textarea id="content" rows="6" class="form-control" name="content" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row col-12">
                  <div class="col-6">
                    <div class="form-group">
                      <label>Image 1</label>
                      <input type="file" name="image1" class="form-control" id="inputimg"
                        accept="image/jpg,image/png,image/svg,image/webp,image/jpeg,image/pdf" placeholder="image">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label>Image 2</label>
                      <input type="file" name="image2" class="form-control" id="inputimg"
                        accept="image/jpg,image/png,image/svg,image/webp,image/jpeg,image/pdf" placeholder="image">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="close" class="btn btn-default" data-dismiss="modal" name="close"
                    id="close">Close</button>
                  <button type="submit" name="submit1" class="btn btn-primary float-right my-3 " id="sub"
                    style="margin-right: 5px;">Submit </button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.sub').click(function () {
        let view = $(this).data('id');

        $.ajax({
          url: 'activities.php',
          type: 'post',
          data: {
            view: view
          },
          success: function (response1) {
            $('.body1').html(response1);
            $('mymodal').modal('show');
          }
        });
      });
    });
  </script>
</body>

</html>