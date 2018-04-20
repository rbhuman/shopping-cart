<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
  


    $db=new mysqli('localhost','root','','emp_manager');
    $sql="insert into signup(firstname,lastname,email,username,password,password1,month,day,year,gender)
          values(?,?,?,?,?,?,?,?,?,?)";

    $stmt=$db->prepare($sql);
   if($_POST['firstname'] == '')
    {?>
     <script>
            alert('First Name is required!');
            location.href='signup.php';
    </script>
   <?php }
    if($_POST['lastname'] == '')
    {?>
      <script>alert('Last Name is required!');
         location.href='signup.php';
      </script>
           <?php }
    if($_POST['email'] == '')
    {?>
      <script>
             alert('Email is required!');
             location.href='signup.php';
     </script>
    <?php }
    
  //whether the email format is correct
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
  {
      //if it has the correct format whether the email has already exist
      $email= $_POST['email'];
  }else
  {?>
      <script>
             alert('Email is not vaild!');
             location.href='signup.php';
     </script>
    <?php }
  
   /* $sql1 = "SELECT * FROM signup ";
      $stmt1=$db->prepare($sql1);
      $stmt1->execute();
      $result=$stmt1->get_result();

      while($row=$result->fetch_assoc()){
            if ($row['email']==$email)
            {?>
              <script>
                     alert('Email aleady in Use!');
                     location.href='signup.php';
             </script>
            <?php }
          }*/
      
 if($_POST['username'] == '')
 {?>
  <script>
         alert('Username is required!');
         location.href='signup.php';
 </script>
<?php }

 if($_POST['password'] == '')
 {?>
  <script>
         alert('Password is required!');
         location.href='signup.php';
 </script>
<?php }
 if($_POST['password'] != $_POST['password1'])
 {?>
  <script>
         alert('Password did not match!');
         location.href='signup.php';
 </script>
<?php 
}
 else{
      
      $months=$_POST['months'];
      $days=$_POST['days'];
      $years=$_POST['years'];
      $gender=$_POST['gender'];
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email= $_POST['email'];
      $username=$_POST['username'];
      $pass=$_POST['password'];
      $pass1=$_POST['password1'];

      $stmt->bind_param('ssssssssss',$firstname,$lastname,$email,$username,$pass,$pass1,$months,$days,$years,$gender);
      $stmt->execute();
      $db->close();
      ?>
        <script>
               alert('Hi !'.<?=$username?>.'Congratulation Sign up successful!');
               location.href='../login/login.php';
       </script>
      <?php 
       

     
    }
  }
 
  ?>