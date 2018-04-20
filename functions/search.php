<?php

include_once('../css/bootstrap.php');
include_once('../classconfig.php');
use model\item;

session_start();
?>
<h1><center>Your searched products are:</center></h1>
<link rel="stylesheet" href="../css/style.css">
<button class="btn btn-info btn-xs pull-left"><a href="../model/items.php">Go Back</a></button><br><hr/>
<?php


if($_SERVER['REQUEST_METHOD']=='POST'){

    $db=new mysqli('localhost','root','','emp_manager');
     $search=$_POST['items'];

     $sql="select * from product where( name like '%$search%')";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $result=$stmt->get_result();

        if($result->num_rows>0):
        while($value=$result->fetch_assoc()){
           $item= new item();
            
            ?>
            <div class="product_box next">
                <div class="p_name"> <?=$item->name=$value['name']?>  </div>
                <div ><img src="../upload/<?=$item->photo=$value['photo'];?>" style="width:250px;height:200px;border:1px solid black;" /></div>
                <div class="p_price ">price:<?=$item->price=$value['price']?></div>
                <div class="press">
                <form method="post" action="../cart/add_to_cart.php">
                <button  class="btn btn-success btn-xs" name="add_to_cart" value="<?=$item->id=$value['id']?>" type="submit">Add To Cart</button>
            </form>
            </div>
            </div>
        
            <?php
        } 
    else:
        if($_POST['items']==''){
    ?>
    <script>
    alert('product not found');
    location.href='../model/items.php';
    </script> 
    <?php
        }
    endif;
}
    ?>
     <div id="line"><hr/></div>
    <a href="#top"><button class="btn btn-danger btn-xs glyphicon glyphicon-arrow-up pull-right " id="up"><span>UP</span></button></a>
</div>