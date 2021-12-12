<?php
		session_start();
		print_r($_SESSION);
	include 'backend/connect.php';
	$p_id = mysqli_real_escape_string($con,$_GET['p_id']);
	$act = mysqli_real_escape_string($con,$_GET['act']);

	//add to cart
	if($act=='add' && !empty($p_id))
	{
		if(isset($_SEESION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}
	//remove product
		if($act=='remove' && !empty($p_id))
		{
			unset($_SESSION['cart'][$p_id]);
		}
	//update cart
		if($act=='update')
		{
			$amount_array = $_POST['amount'];
			foreach($amount_array as $p_id=>$amount)
			{
				$_SESSION['cart'][$p_id]=$amount;
			}
		}
		//cancel cart
		if($act=='cancel')
		{
			unset($_SEESION['cart']);
		}
?>
<form id="frmcart" name="frmcart" method="post" action="?act=update">
	<table width="600" boder="0" align="center" class="square">
		<tr>
			<td colspan="5" bgcolor="#CCCCCC">
				<b>ตะกร้าสินค้า</span></b></td>
		</tr>
		<tr>
			<td bgcolor="#EAEAEA">สินค้า</td>
			<td align="center" bgcolor="#EAEAEA">ราคา</td>
			<td align="center" bgcolor="#EAEAEA">จำนวน</td>
			<td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
			<td align="center" bgcolor="#EAEAEA">ลบ</td>
			<td align="center" bgcolor="#EAEAEA">ราคา</td>
		</tr>
	<?php
	$total=0;
	if(!empty($_SESSION['cart']))
	{
		foreach ($_SESSION['cart'] as $p_id => $qty) 
		{
			$sql = "SELECT * FROM tbl_product WHERE p_id=$p_id";
			$query = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($query);
			$sum = $row['p_price'] * $qty;//จำนวนคูณที่ซื้อ
			$total += $sum;//ราคารวม
			echo "<tr>";
			echo "<td width='334'>". $row["p_name"]."</td>";
			echo "<td width='46' align='right'>".number_format($row["p_price"],2)."</td>";
			echo "<td width='57'align='right'>";
			echo "<input type='number' name='amount[$p_id]'value='$qty' size='2'/></td>";
			echo "<td width='93'align='right'>".number_format($sum,2)."</td>";
			//remove
			echo "<td width='334'align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</td>";
			echo "</tr>";

		}
	}
?>