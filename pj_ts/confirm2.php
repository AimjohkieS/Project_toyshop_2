<?php
	session_start();
	//echo '<pre>';
	//print_r($_SESSION);
	//echo '<pre>';
	include("backend/connect.php");
	$m_id = $_SESSION['user_id'];
	$m_email = $_SESSION['m_email'];
	$m_tel = $_SESSION['m_tel'];
	$m_name = $_SESSION['m_name'];

	//echo $m_id;
	//exit;
	$qmember="SELECT m_name,m_address,m_email,m_tel FROM tbl_admin WHERE  m_id=$m_id";
    $rsmember = mysqli_query($con, $qmember);
	$rmember = mysqli_fetch_array($rsmember);
	//echo '<pre>';
	//print_r($rmember);
	//echo '</pre>';
	//exit;

	$sql="SELECT * FROM tbl_product WHERE p_id ";
    $result=mysqli_query($con,$sql);
		$sql = "SELECT * FROM tbl_product WHERE p_id";
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query); ?>
		<div class="cart" style="width: 18rem;">
		<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
            <table class="table table-bordered" width="600" border="0" align="center" class="square">
            <tr>
                <th width="30%">ทำการสั่งซื้อ</th>
            </tr>
            <td>
            	<label for="inputAddress">Address</label>
            	<input type="text" class="form-control" id="inputAddress" name="m_address" style="height:50px;" value="<?php echo $rmember['m_address'];?>">
            	<!--<textarea name="m_address" cols="35" rows="5" id="address" value="<?php echo $rmember['m_address'];?>"placeholder="กรอกที่อยู่"></textarea>-->
            </td>

                    <?php $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) { ?>
								<td><img class="card-img-top" src="backend/p_img/<?php echo $row["p_img"];?>" alt="Card image cap"><td>
								<td><?php echo $value["item_name"]; ?>
                            	<br>฿<?php echo number_format($value["product_price"]); ?></td>      
                            	<input type="hidden" name="hidden_name" value="<?php echo  $value["item_name"];?>">       	
						</tr>
									<td width="100" colspan="1" >
								</td>
								<?php
                           		$total = $total+($value['product_price']*$value['item_quantity']);
                            	}
                       			 ?>
            					<tr>
                				<th width="30%">ช่องทางชำระเงิน</th>
            					</tr>
								<td><label>ชำระผ่านบัญชีธนาคาร<input type="checkbox" name="goalbank" value="0"/></label></td>
								</tr>
								<tr>
								<td><label> เก็บเงินปลายทาง<input type="checkbox" name="goalhome" value="1"/></label><br></td>
                       			<td>ยอดชำระทั้งหมด
									
                            	<br><?php echo number_format($total,2); ?>
                            	<input type="hidden" name="m_id" value="<?php echo $m_id;?>">
                            	<input type="hidden" name="m_id" value="<?php echo $m_id;?>">
                            	<input type="hidden" name="m_tel" value="<?php echo $m_tel;?>">
                            	<input type="hidden" name="m_email" value="<?php echo $m_email;?>">
                            	<input type="hidden" name="m_name" value="<?php echo $m_name;?>">
                            	<input type="hidden" name="total" value="<?php echo $total;?>">
                            	<button type="submit" class="btn btn-primary" >สั่งสินค้า</button>	</td>	
                            	</div>								
								</tr>
					</form>