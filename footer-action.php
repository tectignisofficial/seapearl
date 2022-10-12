<?php
include("include/config.php");

if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $email=$_POST['email'];
 
  $sql=mysqli_query($conn,"INSERT INTO `new_latest`(`id`,`email`) VALUES ('$id','$email')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:index.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}