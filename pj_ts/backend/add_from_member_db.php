<?php
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $member_user = $_REQUEST["member_user"];
  $member_pass = $_REQUEST["member_pass"];
  $member_name = $_REQUEST["member_name"];
  $member_email = $_REQUEST["member_email"];
  $member_tel = $_REQUEST["member_tel"];
  $member_address = $_REQUEST["member_address"];
  //เพิ่มเข้าไปในฐานข้อมูล
  $sql = "INSERT INTO tbl_member(member_user, member_pass, member_name, member_email, member_tel, member_address)
       VALUES('$member_user', '$member_pass', '$member_name', '$member_email', '$member_tel', '$member_address')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('เพิ่มข้อมูลเรียบร้อย');";
  echo "window.location = 'member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>