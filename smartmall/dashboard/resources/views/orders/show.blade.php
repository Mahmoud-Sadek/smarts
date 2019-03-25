<title>@yield('title', 'product')</title>
@include('in-layout/header')


            <!-- End Left Sidebar -->
            <div class="content-inner">
                <div class="container-fluid">

                                     <div class="row">
                            <div class="col-xl-12">
                                <!-- Begin Invoice -->
                                <div class="invoice has-shadow">
                                    <!-- Begin Invoice COntainer -->
                                    <div class="invoice-container">
                                        <!-- Begin Invoice Header -->
                                        <div class="invoice-header">
                                        	<div class="row d-flex align-items-center">
	                                        	<div class="col-xl-2 col-md-2 col-sm-12 d-flex justify-content-xl-start justify-content-md-center justify-content-center mb-2">
		                                        	<div class="invoice-logo">
		                                            </div>
		                                        </div>
		                                        <div class="col-xl-3 col-md-3 col-sm-3 justify-content-xl-start justify-content-md-center justify-content-center mb-2">
		                                            <div class="details" style="margin-right: 30px">
		                                            	<ul>
                                                            <li>الحاله</li> <br>
    		                                                    <li>الوقت</li> <br>
                                                             <li>السعر الكلى</li>
		                                                </ul>
		                                            </div>
	                                            </div>
	                                            <div class="col-xl-7 col-md-7 col-sm-9 justify-content-xl-end justify-content-md-end justify-content-center mb-2">
	                                                <div class="client-details">
	                                                    <ul>
                                                            <li class="title"><span style="width:100px;"><span class="badge-text badge-text-small danger">{{ $orders->status }}</span></span></li><br>
    	                                                    	<li class="title"><span style="width:200px;"><span class="badge-text badge-text-small info">{{ $orders->time }}</span></span></li><br>

                                                            <li><span style="width:200px;"><span class="badge-text badge-text-small success ">{{ $totalprice }}</span></span></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
                                            </div>
                                        </div>
                                        <!-- End Invoice Header -->
                                    </div>
                                    <!-- End Invoice Container -->

                                </div>
                                <!-- End Invoice -->
                            </div>
                        </div>

                </div>
                <!-- End Container -->




                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 40%">المنتج</th>
                                    <th>صوره المنتج </th>
                                    <th>الكميه </th>
                                    <th>Unit price</th>
                                    <th>Sum</th>
                                </tr>
                            </thead>
                            <tbody>
                    @foreach($carts as $carts)
                                <tr>

                                    <td>
                                        <a href="{{ route('product.show', $carts->products->id ) }}">

                                                <!-- <i class="la la-eye view"></i> -->
                                      <span style="border: 1px solid #08a6c3; border-radius:50px; padding: 5px 14px">{{ $carts->products->name_en }}
                                        </a>
                                    </td>

                                    <td>
                                        <img style="width:100px; height:100px" src="../storage/app/{{ $carts->products->image1 }}">
                                        <a href=""> </a>
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

                            </tbody>
                        </table>




            </div>
        </div>
        <!-- End Page Content -->
    </div>
@include('in-layout/footer')
