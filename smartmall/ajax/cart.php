<?php

include 'db.php';

$quantity      = $_REQUEST['q'];
$user_id       = $_REQUEST['b'];
$product_id    = $_REQUEST['c'];
$price         = $_REQUEST['p'];

$totalprice   = $price * $quantity ;



 $stmt3 = $con ->prepare("INSERT INTO  carts( user_id, product_id, quantity, price, total_price)
                                      VALUES(:zuser_id, :zproduct_id, :zquantity, :zprice, :ztotalprice  )");

 $stmt3 -> execute(array( 'zuser_id'    => $user_id,
                          'zproduct_id' => $product_id,
                          'zquantity'   => $quantity,
                          'zprice'      => $price,
                          'ztotalprice' => $totalprice ));




  echo '<div class="alert alert-danger alert-dismissible" style="width: 60%; margin-top: 10px; ">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-check" aria-hidden="true"></i>
             <i class="icon-f-39"></i> <strong>Added To Cart</strong>
        </div>  ';


?>
