<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $admin_id = $_REQUEST["admin_id"];
  $admin_user = $_REQUEST["admin_user"];
  $admin_pass = $_REQUEST["admin_pass"];
  $admin_name = $_REQUEST["admin_name"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE tbl_admin SET  
      admin_user='$admin_user' , 
      admin_pass='$admin_pass' , 
      admin_name='$admin_name' 
      WHERE admin_id='$admin_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรายชื่อเรียบร้อยแล้ว');";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>