 <?php
      include('h.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_admin ORDER BY m_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                $row_am = mysqli_fetch_assoc($result);
                ?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
 
  </script>

  <table border="2" class="display table table-bordered" id="example1" align="center"  >
  <thead>
    <tr class="info">    
    <th>อันดับ</th>
    <th>ชื่อผู้ใช้</th>
    <th>ชื่อ</th>
    <th>รหัสผ่าน</th>
    <th></th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_am['m_id']; ?></td>
      <td><?php echo $row_am['m_user']; ?></td>
      <td ><?php echo $row_am['m_name']; ?></td>
      <td><a href="admin.php?act=rwd&ID=<?php echo $row_am['m_id']; ?>" class="btn btn-info btn-xs"> เปลี่ยนรหัสผ่าน </a> </td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row_am['m_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
       <td><a href="delete_from_admin_db.php?ID=<?php echo $row_am['m_id']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
  
    </table> 