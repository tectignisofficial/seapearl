<?php
include("include/config.php");

session_start();
if(!isset($_SESSION['id'])){
    header("location:adminlogin.php");
}

if(isset($_POST['submitt'])){
  $title=$_POST['title'];
  $short_content=$_POST['scontent'];
  $full_content=$_POST['fcontent'];
  $img=$_FILES['image']['name'];
  $price1=$_POST['price1'];
  $price2=$_POST['price2'];
  $filedet=$_FILES['image']['tmp_name'];
  $location="dist/img/activities/".$img;
  move_uploaded_file($filedet,$location);
 
  $sql=mysqli_query($conn,"INSERT INTO `activities`(`title`, `short_content`, `full_content`, `img`, `price1`,`price2`) VALUES ('$title','$short_content','$full_content','$img','$price1','$price2')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:activities.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

<?php
// delete
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from activities where id='$id'");
  if($sql=1){
      header("location:activities.php");
  }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Activites</title>

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
              <h1 class="m-0">Activites</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Activites</li>
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
                    data-target="#exampleModal" style="margin-right: 5px;">+ Add Activites</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr</th>
                        <th>Title</th>
                        <th>Short Content</th>
                        <th>Full Content</th>
                        <th>Image</th>
                        <th>Price 1</th>
                        <th>Price 2</th>
                        <th>Action</th>
                      

                      </tr>
                    </thead>
                    <tbody>

                      <?php
                         $sql=mysqli_query($conn,"SELECT * FROM activities");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>

                      <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['short_content'];?></td>
                        <td><?php echo $row['full_content'];?></td>
                        <td><img src="dist/img/activities/<?php echo $row['img']; ?>" width="50px" alt="Alps"></td>
                        <td><?php echo $row['price1'];?></td>
                        <td><?php echo $row['price2'];?></td>
                        <td>
                          <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-sm btn-info m-1 useredit" data-bs-toggle="modal"
                              data-bs-target="#editModal" data-id='<?php echo $row['id']; ?>'><i
                                class="fa fa-pen"></i></button> -->

                            <a href="activities.php?delid=<?php echo $row['id']; ?>"><button type="button"
                                onclick="return confirm('Are you sure you want to delete this item')"
                                class="btn btn-sm btn-danger m-1" style="color: aliceblue"> <i class="fas fa-trash"></i>
                              </button></a>

                          </div>
                        </td>
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
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit Activites</h4>
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
                              <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>"
                                required>
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
                          accept="image/jpg,image/png,image/svg,image/webp,image/jpeg,image/pdf"
                          value="<?php echo $row['img']; ?>" placeholder="image">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label>Short Content</label>
                        <textarea id="content" rows="3" class="form-control" name="scontent"
                          value="<?php echo $row['short_content']; ?>" required></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label>Full Content</label>
                        <textarea id="content" rows="6" class="form-control" name="fcontent"
                          value="<?php echo $row['full_content']; ?>" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row col-12">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="inputName">Price 1</label>
                        <input type="number" name="price1" class="form-control" id="inputfname"
                          value="<?php echo $row['price1']; ?>" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="inputName">Price 2</label>
                        <input type="number" name="price2" class="form-control" id="inputName"
                          value="<?php echo $row['price2']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="close" class="btn btn-default" data-dismiss="modal" name="close"
                      id="close">Close</button>
                    <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="useredit"
                      style="margin-right: 5px;">Submit </button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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

  <!-- Edit Modal -->



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

  <script>
    $(document).ready(function () {
      $('.delbtn').click(function (e) {
        e.preventDefault();
        let del_id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
              window.location.href = "activities.php?del_id" + del_id;
            } else {
              swal("Your imaginary file is safe!");
            }
          });
      })
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.useredit').click(function () {
        let dnk = $(this).data('id');

        $.ajax({
          url: 'activities.php',
          type: 'post',
          data: {
            dnk: dnk
          },
          success: function (response1) {
            $('.body1').html(response1);
            $('#editModal').modal('show');
          }
        });
      });

    });
  </script>

</body>

</html>