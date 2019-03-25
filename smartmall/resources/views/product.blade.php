<title>@yield('title', 'SmartMall')</title>
@include('layout/header')


<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fas fa-home"></i> &nbsp;Home</a>
    <i class="fas fa-angle-double-right"></i>
  </li>
  <li>
    <a >{{ $cates->title_en }}</a>
  </li>

</ol>
    <!------------- content ----------------->
    <div class="row products">

        <div class="col-md-2">
                <div class="Filter-Cat">
                    <div class="Filterbox">
                        <h4>{{ $cates->title_en }}</h4>
                        <ul class="refine-menu">
 @foreach($main_cats as $main_cats)
                            <li>
                                <a href='{{ url("/product{$main_cats->id}") }}'>
                                    {{ $main_cats->title_en }}
                                </a>
                            </li>
 @endforeach
                        </ul>
                    </div>



                    <div class="Filterbox">
                        <h4>
                            Price
                        </h4>


                        <form  action="{{ URL::current() }}" >
                            <input name="min_price" class="form-control Priceinput" type="text" placeholder="Min">
                            <input name="max_price" class="form-control Priceinput" type="text" placeholder="Max">
                            <input class="form-control Pricesubmit" type="submit" placeholder="conferme">
                        </form>


                    </div>


 


                </div>
        </div>

        <div class="col-md-10">
            <h2>{{ $cates->title_en }}</h2>


            <div class="container">
                <form class="row Cat-SortBy">
                    <div class="col-md-4 text-left">

                         <div style="display:flex">
                           SortBy :   <a href="?sort=asc"> asc </a> |
                           <a href="?sort=desc">desc </a>

                         </div>


                    </div>
                    <div class="col-md-8 ">

                        {{ $pro->links() }}

                    </div>
                </form>
            </div>



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

            <div class="container">
                <div class="row">
                    <ul class="pagination">

                    </ul>
                </div>
            </div>
        </div>
    </div>




@include('layout/footer')
