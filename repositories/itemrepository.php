<?php

namespace Repositories;
use Model\Item;
use Config\Connection;


class ItemRepository implements ItemInterface{
    
    public function __construct(){
    $this->db=new Connection();
}

    public function insert(Item $item){
        $this->db->open();
        $sql="insert into product(name,price, photo)values(?,?,?)";

        $stmt=$this->db->PrepareStatement($sql);
     
        $stmt->bind_param('sss',$item->name,$item->price,$item->photo);
        $result=$this->db->execute();
        $this->db->close();
        return $result;
  
    
        }
        public function getItem(){
            $items=[];
            $this->db->open();
            $sql="select * from product";
            $stmt=$this->db->PrepareStatement($sql);
            $this->db->execute();
            $result=$this->db->getResult();

while($value=$result->fetch_assoc()){

       $item=new Item();
    ?>
    <link rel="stylesheet" href="../css/style.css">
    <div class="product_box">
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
    $items[]=$item;
   }
     $this->db->close();

     return $items;


        
    }

    
}
      ?>


    


