<!DOCTYPE html>
<?php ?>
<html>
<head>
<?php include('h.php');?>
<head>
  <body>
    <div class="container">
  <?php include('navbar2.php');?>
    <div class="row">
      <div class="col-md-2">
            <?php include('menu_member.php');?>
    </div>
      <div class="col-md-10">
        <p></p>
        <?php
        $act = (isset($_GET['act']) ? $_GET['act']: '');
        $q = (isset($_GET['q']) ? $_GET['q']: '');
        if($act =='showbytype'){
          include('show_product_type.php');
        }elseif($q!=''){
          include('show_product_q.php');
        }else{
          include('show_product.php');
          }
        ?>
      </div>
    </div>
  </div>
  </body>
</html>