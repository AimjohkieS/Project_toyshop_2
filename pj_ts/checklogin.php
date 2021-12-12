<?php 
//print_r($_POST);
//exit();
session_start();
        if(isset($_POST['username'])){
                  include("backend/connect.php");
                  $m_user = $_POST['username'];
                  $m_pass = $_POST['password'];


                  $sql="SELECT * FROM tbl_admin
                  WHERE  m_user='".$m_user."' 
                  AND  m_pass='".$m_pass."' ";


                  $result = mysqli_query($con,$sql);
				

                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["m_id"];
                      $_SESSION["m_name"] = $row["m_name"];
                      $_SESSION["m_status"] = $row["m_status"];
                      $_SESSION["m_email"] = $row["m_email"];
                      $_SESSION["m_tel"] = $row["m_tel"];

                        if($_SESSION["m_status"]== "Admin"){
                          Header("Location: backend/index.php");
                        }
                        if ($_SESSION["m_status"]=="Member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: index.php");
 
                        }
                      //if($_SESSION["user_id"]!=''){ 

                        //Header("Location: backend/index.php");
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>