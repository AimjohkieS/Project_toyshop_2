<!DOCTYPE html>
<?php 
//$act = $_POST["action"]; 
//print_r($_POST);
?>

<html>

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
        <!-- Left side column. contains the logo and sidebar -->
        <!-- Content Wrapper. Contains page content -->
      </div>
      <div class="col-md-10">
        <p></p>
        <?php 
        //if($act == 'add'){
        include('confirm2.php');
       // }
        ?>
      </div>

    </div>
  </div>
  </body>
</html>