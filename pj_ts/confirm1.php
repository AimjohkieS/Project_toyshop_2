<?php
	session_start();
	echo '<pre>';
	print_r($_SESSION);
	echo '<pre>';
	include("backend/connect.php");
	$sql="SELECT * FROM tbl_product WHERE p_id ";
    $result=mysqli_query($con,$sql);
		$sql = "SELECT * FROM tbl_product WHERE p_id";
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query);
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) { ?>
                    	<tr>
						<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
							<table width="600" border="0" align="center" class="square">
								<tr>
									<td width="1558" colspan="4" bgcolor="#FFDDBB">
										<strong>ทำการสั่งซื้อ</strong></td>
								</tr>
								<tr>
								<td><textarea name="address" cols="35" rows="5" id="address" placeholder="กรอกที่อยู่"></textarea></td>
								<td><img class="card-img-top" src="backend/p_img/<?php echo $row["p_img"]; ?>alt="Card image cap">
								<td><?php echo $value["item_name"]; ?>
                            	<br><?php echo $value["product_price"]; ?></td>
								</tr>
								<tr>
									<td width="100" colspan="1" >
										<strong>ช่องทางชำระเงิน</strong></td>
								<tr>
								<td>โอน/ชำระผ่านบัญชีธนาคาร<input name="bank" type="checkbox" id="name" required/></td>
								</tr>
								<tr>
								<td>เก็บเงินปลายทาง<input name="goalhome" type="checkbox" id="name" required/>
								<?php
                           		$total = $total+($value['product_price']*$value['item_quantity']);
                            	}
                       			 ?>
                       			<td>ยอดชำระทั้งหมด
                            	<br><?php echo number_format($total,2); ?>
                            	<input type="button" name="Submit2" value ="สั่งสินค้า" style="margin-top:5px;" class="btn btn-success" onclick="window.location='confirm1.php';"></a>	</td>									
								</tr>
