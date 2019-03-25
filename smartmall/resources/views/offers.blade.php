<title>@yield('title', 'SmartMall')</title>
@include('layout/header')


<ol class="breadcrumb">
   <h3 class="text-center">Flash Sale 80% OFF</h3>
</ol>
    <!------------- content ----------------->
    <div class="row products">



        <div class="col-md-12">


            <div class="prooo row text-left">
@foreach($pro as $pro)

	                <div class="col-md-3">
                        <div class="Cat-Product">
                            <a href='{{ url("/pro_details{$pro->id}") }}'>
        	                    <div class="card">
        	                        <img src="dashboard/storage/app/{{ $pro->image1 }}" alt="Card Back">
        	                        <img src="dashboard/storage/app/{{ $pro->image2 }}" class="img-top" alt="Card Front">

                                  <a class="fav"><i class="far fa-heart"></i></a>
        	                    </div>
                            </a>
                            <h4 class="PName">
        	                    <a href='{{ url("/pro_details{$pro->id}") }}'>{{ $pro->name_en }}</a>
                            </h4>
					       <span class="offer1">${{ $pro->price }} SAR</span>
					       <span class=" CColor"><del>${{ $pro->offer_price }} SAR</del></span>

                       </div>
	                </div>


@endforeach

                </div>



            </div>


        </div>
    </div>




@include('layout/footer')
