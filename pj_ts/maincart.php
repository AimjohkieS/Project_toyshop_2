<!DOCTYPE html>
<?php 
#$act = $_POST["action"]; 
//print_r($_POST);
$act = (isset($_POST['action']) ? $_POST['action']: '');
//echo $act;
?>

<html>
<?php  ?>
<head>
<?php include('h.php');?>
<head>
  <body>
    <div class="container">
  <?php include('navbar2.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-2">
            <?php include('menu_member.php');?>
       
      </div>
      <div class="col-md-10">
        <p></p>
        <?php 
        if($act == 'add'){
        include("cart3.php");
        }?>
      </div>

    </div>
  </div>
  </body>
</html> 