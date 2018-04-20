<?php
include_once('../css/bootstrap.php');
?>

<div class="back">

              <div class="image">
                <a href="items.php"> <img src=../img/shop.png style="height:50px;width:200px"></a>
              </div>
           
                <div class="search">
                  <form action="../functions/search.php" method="post" >
                      
                          <div class="input-group">
                            <input type="text" class="form-control " name="items" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-primary" type="submit">Go!</button>
                            </span>
                          </div>
                        </form>
                  </div>
 <div class="p">
                    <div  class="log">
                    <a href="../login/logout.php"><span class="glyphicon glyphicon-minus "></span>log Out</a>
                    </div>
  
                      <div  class="log">
                      <a href="../login/login.php"><span class="glyphicon glyphicon-user  "></span>log In</a>
                      </div>

                      <div class="log">
                      <a href="../signup/signup.php"><span class="glyphicon glyphicon-forward "></span>Sign up</a>
                      </div>
             
               </div>
      <br/>

   </div>
   <div class="next">
    <button class="btn btn-info btn-xs pull-right "> <a href="../cart/cart.php">View My cart :
      <?php
      echo (!empty($_SESSION['cart']))?count($_SESSION['cart']):0;
      ?>
      </a>
      </button>
    <button class="btn btn-info btn-xs pull-left "><a href="../view/form.php">Insert Products in Database</a></button><br>
<hr/>
  
