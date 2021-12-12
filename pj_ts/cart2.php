
<?php
session_start();
	include 'backend/connect.php';
	$sql="SELECT * FROM tbl_product WHERE p_id = '$value'";
	$result=mysqli_query($con,$sql);
	if(isset($_POST["add_product"])){
		if(isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
			if(!in_array($_GET["id"], $item_array_id))
			{
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
					'item_id' => $_GET["id"],
					'item_name' => $_POST["hidden_name"],
					'item_price' => $_POST["hidden_price"],
					'item_quantity' => $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else
			{
				echo '<script>alert("สินค้าถูกเพิ่ม")</script>';
			}
		}
		else
		{
				$item_array = array(
					'item_id' => $_GET["id"],
					'item_name' => $_POST["hidden_name"],
					'item_price' => $_POST["hidden_price"],
					'item_quantity' => $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
		}
	}

?>
<div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">สินค้า</th>
                <th width="10%">จำนวน</th>
                <th width="13%">ราคา</th>
                <th width="10%">รวม</th>
                <th width="17%">ดำเนินการ</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"])){
                    $total = 0;
                    foreach ($_SESSION['shopping_cart'] as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['item_name']; ?></td>
                            <td><?php echo $value['item_quantity']; ?></td>
                            <td>$ <?php echo number_format((float)$value['item_price'],2); ?></td>
                            <td>$ <?php echo number_format((float)$value['item_price'] * $value['item_quantity'], 2); ?></td>
                            <td><a href="cart2.php?action=delete&id=<?php echo $value['item_id']; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>?>
                        </tr>
                        <?php
                          if (is_numeric($value['item_quantity']) && is_numeric($value['item_price'])) {
                                $total += ($value['item_quantity'] * $value['item_price']);
                                } else {
                                // do some error handling...
                            } ?>
                        <!--<?php
                        	$total = $total+($value['item_price']*$value['item_quantity']);
                        	}
                        ?>-->
                        	<tr>
                        		<td colspan="3" align="right">ราคารวม</td>
                        		<td align="right">฿ <?php echo number_format($total,2); ?> </td>
                        		<td></td>
                        		</tr>
                        	<?php
                        }
                        ?>
                    </table>
           </div>

    </div>
