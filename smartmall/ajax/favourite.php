<?php 

include 'db.php'; 

$user_id       = $_REQUEST['n']; 
$product_id    = $_REQUEST['a'];



 $stmt2 = $con ->prepare("INSERT INTO  favorites(user_id, product_id) VALUES(:zuser_id, :zproduct_id )"); 

 $stmt2 -> execute(array( 'zuser_id'      => $user_id,
                          'zproduct_id'   => $product_id ));




  echo '<div class="alert alert-danger alert-dismissible" style="width: 60%; margin-top: 21px; margin-left:3px">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="icon-n-072" ></i> <strong>Added To Favourite</strong>
        </div>  ';


?>

