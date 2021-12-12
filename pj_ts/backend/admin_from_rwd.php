<?php 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$ID = $_GET['ID'];
$sql = "SELECT * FROM tbl_admin WHERE admin_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<h4> Form Reset Password </h4>
<form action="admin_from_rwd_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      Username :
    </div>
    <div class="col-sm-3">
      <input type="text" name="admin_user" required class="form-control" autocomplete="off" value="<?php echo $row['admin_user'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3 control-label">
     New Password :
    </div>
    <div class="col-sm-3">
      <input type="password" name="admin_pass1" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3 control-label">
     Confirm Password :
    </div>
    <div class="col-sm-3">
      <input type="password" name="admin_pass2" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>