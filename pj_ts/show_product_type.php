<?php

$type_id = $_GET['type_id'];
//echo $type_id;
//exit;

$query_product_type = "SELECT * FROM tbl_product as p 
  INNER JOIN tbl_type as t
  ON p.type_id = t.type_id  
  WHERE p.type_id = $type_id
  ORDER BY p.p_id ASC";
  $result_pro =mysqli_query($con, $query_product_type) or die ("Error in query: $query_product_type " . mysqli_error());

     //echo($query_product_type);
     //exit()
?>
<div  class="row">

<?php foreach ($result_pro as $rw_p ) { ?>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="backend/p_img/<?php echo $rw_p['p_img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $rw_p['p_name']; ?></h5>
    <p class="card-text"> <?php echo $rw_p['type_name']; ?></p>
    <a href="#" class="btn btn-success">สั่งซื้อ</a>
  </div>
</div>




<?php } ?>