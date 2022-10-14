<?php
include("include/config.php");
?>

<?php

if(isset($_POST['submit'])){

 
    $mobile1=$_POST['mobile1'];
    $mobile2=$_POST['mobile2'];
    $email=$_POST['email'];
  
  
    $sql="UPDATE `settings` SET `mobile1`='$mobile1',`mobile2`='$mobile2', `email`='$email'";
    if (mysqli_query($conn, $sql)){
      header("location:setting.php");
   } else {
      echo "connection failed !";
   }
   
  }

  
if(isset($_POST['submitSweetalert'])){

 
  $Sweetalert=$_POST['Sweetalert'];


  $sql="UPDATE `SweetalertModal` SET `Sweetalert`='$Sweetalert'";
  if (mysqli_query($conn, $sql)){
    header("location:setting.php");
 } else {
    echo "connection failed !";
 }
 
}
  
if(isset($_POST['update'])){

    $link=$_POST['link'];
    
      $sql="UPDATE `facebook` SET `link`='$link' ";
    
      if (mysqli_query($conn, $sql)){
        header("location:setting.php");
     } else {
        echo "connection failed !";
     }
     
    }

   
  
    if(isset($_POST['whatsappNoBtn'])){

        $whatsappNo=$_POST['whatsappNo'];
        
          $sql="UPDATE `whatsapp` SET `whatsappNo`='$whatsappNo' ";
        
          if (mysqli_query($conn, $sql)){
            header("location:setting.php");
         } else {
            echo "connection failed !";
         }
         
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Settings</title>

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
              <h1 class="m-0">Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
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
                  <!-- form -->
                  <form   method="POST" >
                                <!-- <?php 
                        
                        $sql=mysqli_query($conn,"select * from settings");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?> -->
                                    <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">Mobile No 1</label>
                                            <input type="text" class="form-control" id="accountLastName" name="mobile1" placeholder="Doe" value="<?php echo $arr['mobile1'];?>" data-msg="Please enter last name" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">Mobile No 2</label>
                                            <input type="text" class="form-control" id="accountLastName" name="mobile2" placeholder="Doe" value="<?php echo $arr['mobile2'];?>" data-msg="Please enter last name" />
                                        </div>
                                        
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="<?php echo $arr['email'];?>" />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1" name="submit">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- <?php   } ?> -->

                                </form>
                                <!--/ form -->
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Social media</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form -->
                  <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from facebook");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="dist/icon/facebook.png" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <div class="col-md-12 col-12  position-relative">
                                                
                                                <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="enter link " value="<?php echo $arr['link'];?>"  required />
                                                
                                            </div>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="update" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                        <form method="post">
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from whatsapp");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="dist/icon/whatsapp.png" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                <div class="col-md-12 col-12  position-relative">
                                                
                                                <input type="text" class="form-control" name="whatsappNo" id="whatsappNo" placeholder="enter link " value="<?php echo $arr['whatsappNo'];?>"  required />
                                                
                                            </div>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                <button class="btn btn-primary" name="whatsappNoBtn" type="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php   } ?>
                                        </form>
                                <!--/ form -->
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Sweetalert</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form -->
                  <form   method="POST" >
                                <!-- <?php 
                        
                        $sql=mysqli_query($conn,"select * from SweetalertModal");
                       
                         while($arr=mysqli_fetch_array($sql)){
                        ?> -->
                                    <div class="row">
                                   
                                    
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Sweetalert Message</label>
                                            <input type="text" class="form-control" id="accountEmail" name="Sweetalert" placeholder="Email" value="<?php echo $arr['Sweetalert'];?>" />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1" name="submitSweetalert">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- <?php   } ?> -->

                                </form>
                                <!--/ form -->
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

</body>

</html>