<?php
//1. เชื่อมต่อ database:
include('backend/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="container">
	<div class="row">
			<div class="col-12 ">
				<h3>
					::List Product::
				</h3>
			</div>
			<?php foreach ($result as $rsprd){ ?>
			<div class="col-12 col-sm-3 col-md-3" style="margin-bottom: 20px;">
				<div class="card" style="width: 100%;">
					<img src="backend/p_img/<?php echo $rsprd['p_img'];?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $rsprd['p_name'];?></h5>
						<p class="card-text"><?php echo $rsprd['p_detail'];?></p>
						<a href="cart.php?p_id=<?php echo $rsprd['p_id'];?>&act=add" class="btn btn-success">Add to Card</a>
					</div>
				</div>
			</div>
			<?php } ?>
	</div>
</div>
