<?php
include_once('../classconfig.php');

use Repositories\Itemrepository;
use Model\Item;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $item= new Item();

    $item->name=$_POST['name'];
    $item->price=$_POST['price'];
    $item->photo=$_FILES['photo']['name'];
    $item->photo1=$_FILES['photo']['tmp_name'];

    $filetype=$_FILES['photo']['type'];

    $isValid=false;
    switch($filetype){
        case'image/png':
        case'image/jpg':
        case'image/jpeg':
        case'image/bmp':
         $isValid=true;
         break;
    }if(!$isValid){?>
    <script>
    alert('please upload the valid photo');
    location.href='form.php';
    </script>

    <?php   
    }else{ 
        move_uploaded_file($item->photo1,"../upload/".$item->photo);
    
   $itemRepo= new ItemRepository();
   $result=$itemRepo->insert($item);
   var_dump($result);
?>
<script>
alert("Congratulation !!! Data inserted successfully");
location.href='form.php';
</script>
  <?php   
 
   }

}

?>