<?php 
session_start();
  $query_product = "SELECT * FROM tbl_product as p 
  INNER JOIN tbl_type as t
  ON p.type_id = t.type_id  
  ORDER BY p.p_id ASC";
  $result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
    // echo($query_product);
    // exit()

?>

<div  class="row">

<?php foreach ($result_pro as $rw_p ) { ?>

<div class="cart" style="width: 18rem;">
  <!--<form method="get" action="maincart.php">-->
    <!-- <form method="post" action="maincart.php?action=add&id=<?php echo $rw_p['p_id']; ?>"> -->
      <form method="post" action="maincart.php"> 
  <!--<form method="post" action="cart3.php?action=add&id=<?php echo $rw_p['p_id']; ?>">-->
    <img class="card-img-top" style="width:200px; height:200px;"src="backend/p_img/<?php echo $rw_p['p_img']; ?>" alt="Card image cap">
    <div class="card-body">
      <!--<h5 class="card-title" name="hidden_name"><?php echo $rw_p['p_name']; ?></h5>-->
      <input type="hidden" name="id" value="<?php echo $rw_p['p_id']; ?>">
      <input type="hidden" name="action" value="add">
      <input type="hidden" name="p_id" value="<?php echo $rw_p['p_id']; ?>">
      <input type="hidden" name="hidden_name" value="<?php echo $rw_p['p_name']; ?>">
      <p class="card-text"> <?php echo $rw_p['type_name']; ?></p>
      <input type="hidden" name="hidden_price" value="<?php echo ($rw_p['p_price']); ?>">
       <p class="card-text" > <?php echo number_format($rw_p['p_price']); ?></p>
      <input type="text" name="quantity"  class="form-control" value="1">
       <input type="submit" name="add" value ="สั่งซื้อ" style="display: inline-block; text-align:center; width:100px; height:50px; margin-top:5px;" class="btn btn-success"></a>
      <!--<a href="cart.php?p_id=<?php echo $rw_p['p_id']; ?>$act=add" name="add" class="btn btn-success">สั่งซื้อ</a>-->


  </div>
</form>
</div>




<?php } ?>
</div>  
