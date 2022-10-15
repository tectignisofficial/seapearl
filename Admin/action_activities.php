<?php
include("include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:adminlogin.php");
}

?>

<?php
// edit update
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from activities where id='".$_POST['dnk']."'");
              
           $row=mysqli_fetch_array($sql)
           ?>   
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
                          <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required>
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
                      accept="image/jpg,image/png,image/svg,image/webp,image/jpeg,image/pdf" value="<?php echo $row['img']; ?>" placeholder="image">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Short Content</label>
                    <textarea id="content" rows="3" class="form-control" name="scontent" value="<?php echo $row['short_content']; ?>" required></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Full Content</label>
                    <textarea id="content" rows="6" class="form-control" name="fcontent" value="<?php echo $row['full_content']; ?>" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row col-12">
                <div class="col-6">
                  <div class="form-group">
                    <label for="inputName">Price 1</label>
                    <input type="number" name="price1" class="form-control" id="inputfname" value="<?php echo $row['price1']; ?>" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="inputName">Price 2</label>
                    <input type="number" name="price2" class="form-control" id="inputName" value="<?php echo $row['price2']; ?>">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>
                <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="useredit"
                  style="margin-right: 5px;">Submit </button>
              </div>
          </form>
        </div>

        <?php  } ?>