<title>@yield('title', 'SmartMall')</title>
@include('layout/header')


<?php

use App\model\Product;
use App\model\Cart;

$produts  = Product::all();
$carts  = Cart::where('user_id', Auth::user()->id)->get();



?>



<!--------------- card -------------------->


<div class="card-shopping container">
    <div class="row">







        <table class="table">
            <thead>
                <tr>
                    <th style="width: 40%">Items info </th>
                    <th>Quantity </th>
                    <th>Unit price</th>
                    <th>Sum</th>
                </tr>
            </thead>
            <tbody>
    @foreach($carts as $carts)
                <tr>

                    <td style="text-align: left">
                        <img src="dashboard/storage/app/{{ $carts->products->image1 }}">
                        <a href=""> </a>
                        <p>Item No. : {{ $carts->products->name_en }}</p>
                    </td>

                    <td>
                        <p>
                          {{ $carts->quantity }}
                        </p>
                    </td>

                    <td>
                        <p>
                      <?php

                           $sum = $carts->products->price ;

                           echo  $sum ;

                       ?>
                        </p>
                    </td>

                    <td>
                        <p>
                          <?php

                             $x = $carts->quantity;
                             $y = $carts->products->price;
                             $z = $x * $y;

                             echo $z;
                          ?>

                        </p>
                    </td>
                </tr>
        @endforeach
                <tr style="background: #ececec">
                    <td>
                        <form class="navbar-form" role="search" style="float: left">

                         coupon:   <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter coupon code" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Apply </button>
                                </div>
                            </div>
                              <br>  <p>You can use more discounts after <a style="display: inline-block" href="log.html"> login in. </a></p>

                        </form>
                     </td>
                    <td></td>
                    <td></td>
                    <td>

                    <p>Product Total : <?php


                                        echo $totalprice ;

                                  ?> SAR</p>


                    </td>
                </tr>

            </tbody>
        </table>
        <hr style="border-top: 2px solid #000">
        <div class="row">
            <div class="col-md-6 text-left">
               <p>You can use more discounts after <a style="display: inline-block" href="log.html"> login in. </a></p>
              <br>  <a href="index.html">Continue shopping</a>
            </div>
        <div class="col-md-3"></div>

        <div class="col-md-3 text-left">
            <h4>Order Summary</h4>
            <p style="color: rebeccapurple; font-size: 18px">Total : {{ $totalprice }} Egp</p>
            <a style="margin-top: 15px;padding: 10px 20px;" class="btn btn-danger" href="">Check Out</a>
        </div>
        </div>
    </div>
</div>









@include('layout/footer')
