<?php
		session_start();
		include("backend/connect.php");
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';

		echo '<hr>';

		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
		$name = $_POST["m_name"];
		$address = $_POST["m_address"];
		$email = $_POST["m_email"];
		$goal = $_POST["goalbank"] . $_POST["goalhome"];
		$tel = $_POST["m_tel"];
		$m_id = $_POST["m_id"];
		$total = $_POST["total"];//รวมทั้งตะกร้า
		$p_name = $_POST['hidden_name'];
		$dttm = date("Y-m-d H:i:s");

//บันทึกสินค้า
		mysqli_query($con ,"pjts");
		$sql1 = "INSERT INTO order_head VALUES(null,'$m_id','$p_name','$dttm','$name','$address','$email','$total','o_status','$goal')";
		//echo $sql1;
		$query1 = mysqli_query($con,$sql1)or die ("Error in query: $sql1". mysqli_error($sql1));
		//echo $query1;






//ฟังชั่น max(values)
$sql2 = "SELECT MAX(o_id) as o_id
FROM order_head
WHERE m_id=$m_id
AND o_dttm='$dttm'
";
$query2 = mysqli_query($con,$sql2) or die ("Error in query: $sql2". mysqli_error($sql2));
$row = mysqli_fetch_array($query2);
$o_id = $row["o_id"];

echo '<br>';
echo $sql2;
echo '<br>';
echo $o_id;
echo '<br>';

//exit;
//PHP Foreach()คำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยเรียกค่าได้ $value ของ array
	foreach ($_SESSION["cart"] as $key => $value)
	{
		$sql3 = "SELECT * FROM tbl_product WHERE p_id";
		$query3 = mysqli_query($con,$sql3) or die ("Error in query: $sql3". mysqli_error($sql3));
		$row3 = mysqli_fetch_array($query3);
		//$pricetotal = $total+($value['product_price']*$value['item_quantity'])
		$pricetotal = $total;
		$value = $value['item_quantity'];
		echo $pricetotal;
		echo $value;
		echo "<br>";
		echo $key;
		echo "<br>";
		//print ($value);
		//exit;
		//print $pricetotal;
		//exit;
		$sql4 = "INSERT INTO order_detail VALUES(null,$o_id,$value,$pricetotal)";
		$query4 = mysqli_query($con,$sql4) or die ("Error in query: $sql4". mysqli_error($sql4));

		echo '<prev>';
		echo $sql4;
		echo '<pre>';
	}
		exit;

	if($query1  && $query4){
		mysqli_query($con,"COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว";
		foreach($_SESSION['cart'] as $p_id)
		{
			unset($_SESSION['cart']);
		}
	}
	else{
		mysqli_query($con,"ROLLBACK");
		$msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ";
	}
?>
<script type="text/javascript">
	alert("<?php echo $msg;?>");
	window location ='show_product.php';
</script>