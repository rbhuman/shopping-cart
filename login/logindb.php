<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
     $db= new mysqli('localhost','root','','emp_manager');
    
     $username=$_POST['username'];
     $password=$_POST['password'];

     $query="SELECT * FROM signup  ";  
     $stmt=$db->prepare($query);
     $stmt->execute();
    $result=$stmt->get_result();
    while($row=$result->fetch_assoc()){
    if($row['username']==$username && $row['password']==$password){
 
      ?>
       <script>
       alert('login successful !');
       location.href='../model/items.php';
       </script>

    <?php   
    $db->close();
    }
    
  else{
   ?>
    <script>
    alert('username or password did not match');
    location.href='login.php';
    </script>
<?php
       }
    }
}
?>
