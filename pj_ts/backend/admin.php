<!DOCTYPE html>
<html>
<head>
<?php include('h.php');?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>
      <div class="col-md-9">
        <a href="admin.php?act=add" class="btn-info btn-sm"> เพิ่ม</a>
        <p></p>
        <?php
        $act = $_GET['act'];
        if($act == 'add'){
        include('add_from_admin.php');
        }elseif ($act == 'edit') {
        include('edit_from_admin.php');
        }
        elseif ($act == 'rwd') {
        include('admin_from_rwd.php');
        }
        else {
        include('list_admin.php');
        }
        ?>
      </div>

    </div>
  </div>
  </body>
</html>