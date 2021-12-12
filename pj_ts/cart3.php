<?php  
session_start();
    //include('h.php');
    include 'backend/connect.php';
    $sql="SELECT * FROM tbl_product WHERE p_id ";
    $result=mysqli_query($con,$sql);
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_POST["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_POST["p_id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart3.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                //echo '<script>window.location="cart3.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_POST["p_id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_POST["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }
?>
<!--<div style="clear: both"></div> -->
 <form method="post" action="mainconfirm.php">
 <!--<form id="frmcart" name="frmcart" method="post" action="confirm2.php">-->
        <h3 class="title2">ตะกร้าสินค้า</h3>
        <div class="table-responsive">
            <table class="table">
            <tr>
                <th width="30%">รายละเอียดสินค้า</th>
                <th width="20%">จำนวนสินค้า</th>
                <th width="15%">ราคา</th>
                <th width="15%">ราคารวม</th>
                <th width="15%"></th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?>
                            <input type="hidden" name="item_name" value="<?php echo $value["item_name"]; ?>"></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>฿ <?php echo number_format($value["product_price"],2); ?></td>
                            <td>฿ <?php echo number_format($value['product_price']*number_format($value['item_quantity']),2); ?></td>
                            <td><a href="cart3.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">ลบสินค้า</span></a></td>
                        </tr>
                        <?php
                            $total = $total+($value['product_price']*$value['item_quantity']);
                            }
                        ?>
                        <tr>
                            <td colspan="3" align="right">รวมทั้งหมด</td>
                            <th align="right">฿ <?php echo number_format($total,2); ?></th>

                            <th><input type="submit" name="add" value ="ชำระเงิน" style="display: inline-block; text-align:center; width:100px; height:50px; margin-top:5px;" class="btn btn-success"></th>
                            <!--<th><input type="button" name="Submit2" value ="ชำระเงิน" style="margin-top:5px;" class="btn btn-success" onclick="
                                    window.location='confirm2.php';"></a></th>-->
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </form>
        </div>
        </div>

    </div>