<meta charset="utf-8">
<?php
include('connect.php'); 
	$admin_id = $_POST["admin_id"];
	$admin_pass1  = sha1($_POST["admin_pass1"]);
	$admin_pass2  = sha1($_POST["admin_pass2"]);

	if($admin_pass1 != $admin_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'admin.php'; ";
		echo "</script>";
	}else{
	$sql = "UPDATE tbl_admin SET 
	admin_pass ='$admin_pass1'
	WHERE admin_id=$admin_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	};
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
}
?>