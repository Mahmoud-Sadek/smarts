<title>@yield('title', 'SmartMall')</title>
@include('layout/header')


<div class="container">
	<div class="row">


@foreach($cats as $cat)

	  <div class="col-sm-6 col-md-3" style="margin-top: 30px">
	    <div class="thumbnail" style="padding: 0">
	    <a href='{{ url("/product{$cat->id}") }}'>
		      <img src="{{$cat->image }}" alt="...">
		      <div style="background: #e2b3d9;" class="caption">
		        <h3 style="color: #fff" >{{ $cat->title_en }} </h3>
	    </a>
	      </div>
	    </div>
	  </div>

@endforeach




	</div>
</div>


@include('layout/footer')
