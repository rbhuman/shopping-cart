<?php
include_once('../config/config.php');
include_once('../functions/function.php');
include_once('../css/bootstrap.php');
$cart_items=[];
if(!empty($_SESSION['cart'])){
    $cart_items=$_SESSION['cart'];
}


$cart_items=[];
if(!empty($_SESSION['cart'])){
    $cart_items=$_SESSION['cart'];
}
?>

<h1><center>View Your Cart</center></h1>
<button class="btn btn-info btn-xs pull-left "><a href="../model/items.php">Go Back</a></button><hr/>
<form method="post" action=" update_cart.php">
<table class="table">
  <tr>
    <th>S.N</th>
    <th>Product Name</th>
    <th>Picture</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
    <th>Remark</th>
   </tr>
  
   <?php 
      foreach($cart_items as $key=>$items):
        $p= getProduct($items['id']);
      ?>
        <tr>
           <td ><?=($key+1);?></td>
            <td> <?=$p['name'];?></td>  
            <td><a href="../upload/<?=$p['photo'];?>"> <img src="../upload/<?=$p['photo'];?>" style="width:25px;height:20px;" /></a></td>  
            <td>
              <input type="text" class="form-control "name="qty[<?=$p['id']?>]" value=" <?=$items['quantity']?>"/>
            </td>
           <td ><?=$p['price']?></td>
           <td ><?=($p['price']*$items['quantity'])?></td>
           <td>
            <a href="delete.php">Remove </a>
           </td>
        </tr>
        <?php
     endforeach;
        ?>
</table>
<button type="submit"  class="btn btn-info btn-xs pull-right" name="update_cart">Update Cart</button>
</form>
    </div>