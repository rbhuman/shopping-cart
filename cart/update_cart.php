<?php

include_once('../config/config.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cart_items=$_SESSION['cart'];
    foreach($_POST['qty'] as $key=>$val){
            $index=getCartItemindex($key);
            $cart_items[$index]['quantity']=$val;
        }
        $_SESSION['cart']=$cart_items;
        header('location:cart.php');
    }
    function getCartItemindex($id){
        $cart_items=$_SESSION['cart'];

        foreach($cart_items as $key=>$items){
            if($items['id']==$id){
                return $key;
            }

        }
        return -1;
    }
?>