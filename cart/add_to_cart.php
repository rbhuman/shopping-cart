
<?php
include_once('../config/config.php');

$cart_items=null;

if(empty($_SESSION['cart'])){
    echo"im here";
    $cart_items=[];
    $cart_items[]=array('id'=>$_POST['add_to_cart'],'quantity'=>1);
    $_SESSION['cart']=$cart_items;

}else{ 
    $cart_items=$_SESSION['cart'];
    $has_in_cart=false;
    foreach($cart_items as $key=>$items){
          
        if($items['id']==$_POST['add_to_cart']){
            $items['quantity']=$items['quantity']+1;
            $has_in_cart=true;
            $cart_items[$key]=$items;
          
            break;
        }
    }
    if(!$has_in_cart){
    $cart_items[]=array('id'=>$_POST['add_to_cart'],'quantity'=>1);
    }
    $_SESSION['cart']=$cart_items;
 
}
header('location:../model/items.php');



