<?php
    include 'backend/connect.php';
    print_r($_POST);
    $username = $_POST["username"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$status = $_POST["Member"];
	
	if(trim($_POST["username"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["password"] != $_POST["password"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["name"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	
	$sql_re = "INSERT INTO tbl_admin (m_user,m_pass,m_name,m_address,m_tel,m_email,m_status) VALUES ('$username', '$password', '$name','$address', '$tel', '$email','$status')";
	$result_re = mysqli_query($con,$sql_re) or die ("Error in query: $sql_re " . mysqli_error($con));
	echo $sql_re;
		mysqli_close($con);		
	#$objResult = mysqli_fetch_array($result_re);
	if($result_re){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>
