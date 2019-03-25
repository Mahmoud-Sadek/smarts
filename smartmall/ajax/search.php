<?php

include 'db.php';

$q = $_REQUEST['q'];

if ($q == '') {
}else {


$stmt = $con ->prepare("SELECT * FROM products WHERE name_en LIKE '%$q%';");

$stmt -> execute();


$rows = $stmt ->fetchAll();


 foreach ($rows as $row) { ?>



        <br>  <div class="row">



                  <div class="col-md-4 pro BG_wihte">
                      <img style="width:50px; height:50px" src="dashboard/storage/app/<?php echo $row['image1'];?>">
                  </div>

                  <div class="col-md-4 pro BG_wihte">
                      <a href="product<?php echo $row['son_id'] ; ?>"> <?php echo $row['name_en'] ; ?> </a>
                  </div>

                </a>

      </div><br>

 <?php }  }





?>
