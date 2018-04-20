<?php

$db=new mysqli('localhost','root','','emp_manager');
$sql="select * from product";
$stmt=$db->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while($row=$result->fetch_assoc()){

        $array[]=$row;
      
}

function getProduct($id){
   global $array;
foreach($array  as $p){
if($p['id']==$id)
{
   return $p;
}
}
return null;
}

?>