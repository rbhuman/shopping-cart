<?php
include_once('../css/bootstrap.php');
include_once('../config/config.php');
include_once('../classconfig.php');
include_once('../view/show.php');

  use repositories\Itemrepository;
  use config\connection;
  use model\item;
       
        //session_destroy();
        ?>

        <?php
        $itemRepo= new ItemRepository();
        $result=$itemRepo->getItem();


        ?>
        <div id="line"><hr/></div>
        <a href="#top"><button class="btn btn-danger btn-xs glyphicon glyphicon-arrow-up pull-right " id="up"><span>UP</span></button></a>

   </div>