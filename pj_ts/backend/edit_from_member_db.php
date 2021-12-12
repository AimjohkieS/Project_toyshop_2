<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $member_id = $_REQUEST["member_id"];
  $member_user = $_REQUEST["member_user"];
  $member_pass = $_REQUEST["member_pass"];
  $member_name = $_REQUEST["member_name"];
  $member_email = $_REQUEST["member_email"];
  $member_tel = $_REQUEST["member_tel"];
  $member_address = $_REQUEST["member_address"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE tbl_member SET  
      member_user='$member_user', 
      member_pass='$member_pass', 
      member_name='$member_name',
      member_email='$member_email',
      member_tel='$member_tel', 
      member_address='$member_address' 
      WHERE member_id='$member_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขเรียบร้อยแล้ว');";
  echo "window.location = 'member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>