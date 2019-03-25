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
		                                                <img src="../storage/app/{{ $pro->image1 }} " alt="logo">
		                                            </div>
		                                        </div>
		                                        <div class="col-xl-3 col-md-3 col-sm-3 justify-content-xl-start justify-content-md-center justify-content-center mb-2">
		                                            <div class="details" style="margin-right: 30px">
		                                            	<ul>
                                                            <li class="company-name">الاسم بالعربية</li>
		                                                        <li class="company-name">الاسم بالانجليزية</li>
                                                            <li>السعر</li>
    		                                                    <li>نسبة الخصم</li>
    		                                                    <li>الكمية</li>
                                                            <li>الوصف</li>
                                                            <li>الوصف بالانجليزي</li>
                                                            <li>المعلومات</li>
                                                            <li>المعلومات بالانجليزي</li>
		                                                </ul>
		                                            </div>
	                                            </div>
	                                            <div class="col-xl-7 col-md-7 col-sm-9 justify-content-xl-end justify-content-md-end justify-content-center mb-2">
	                                                <div class="client-details">
	                                                    <ul>
                                                            <li class="title">{{ $pro->name_ar }} </li>
    	                                                    	<li class="title">{{ $pro->name_en }}</li>
    		                                                    <li>{{ $pro->price }} $</li>
    		                                                    <li>{{ $pro->offer_price }} %</li>
    		                                                    <li>{{ $pro->quantity }}</li>
                                                            <li>{{ $pro->detail_ar }}</li>
                                                            <li>{{ $pro->detail_en }}</li>
                                                            <li> {{ $pro->imfromation_ar }} </li>
                                                            <li>{{ $pro->imfromation_en }}</li>
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

            </div>
        </div>
        <!-- End Page Content -->
    </div>
@include('in-layout/footer')
