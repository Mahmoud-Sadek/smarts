<title>@yield('title', 'product')</title>
@include('layout/header')




            <div class="content-inner">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Sorting -->
                            <div class="widget has-shadow">
                                <div class="widget-body">
                                    <div class="table-responsive">
                                        <button onclick="" class="add-new"><a href="{{ url('/product/create') }}"> اضافة منتج جديد</a></button>

                                        <table id="sorting-table" class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>صورة المنتج</th>
                                                    <th>الاسم بالعربية</th>
                                                    <th>الاسم بالانجليزية</th>
                                                    <th>السعر الاصلي</th>
                                                    <th>نسبة الخصم</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>



@foreach($pro as $pro)

                                                <tr>
                                                    <td><img style="width:80px; height:80px" src="storage/app/{{ $pro->image1 }}"></td>
                                                    <td><span class="text-primary">{{ $pro->name_en }}</span></td>
                                                    <td>{{ $pro->name_ar }}</td>
                                                    <td>{{ $pro->price }}$</td>
                                                    <td>{{ $pro->offer_price }}%</td>
                                                    <td class="td-actions">
                                                      <a href="{{ route('product.edit', $pro->id) }}"><i class="la la-edit edit"></i></a>

                                                        <form method="post" action="{{ route('product.destroy', $pro->id) }}" style="display:inline">
                                                                 {{csrf_field()}}
                                                                 {{ method_field('DELETE') }}

                                                           <button type="submit"><i class="la la-close delete"></i></button>
                                                        </form>
                                                        <a href="{{ route('product.show', $pro->id) }}"><i class="la la-eye view"></i></a>
                                                    </td>
                                                </tr>


  @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- End Sorting -->
                        </div>

                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Container -->

            </div>
        </div>
        <!-- End Page Content -->
    </div>



@include('layout/footer')
