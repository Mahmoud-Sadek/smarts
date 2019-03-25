<title>@yield('title', 'Brands')</title>
@include('layout/header')



<div class="content-inner">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <!-- Sorting -->
                <div class="widget has-shadow">
                    <div class="widget-body">
                        <div class="table-responsive">
                            <button onclick="" class="add-new"><a href="{{ url('/brand/create') }}">اضافة علامة تجارية جديده</a></button>

                            <table id="sorting-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>صورة القسم</th>
                                        <th>الاسم بالعربي</th>
                                        <th>الاسم  بالانجليزية</th>
                                        <th>الناشر</th>
                                        <th>وقت الاضافة</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

 @foreach($brands as $brand)

                                    <tr>
                                        <td><img style="width:150px; height:100px" src="storage/app/{{ $brand->image }}"></td>
                                        <td><span class="text-primary">{{ $brand->title_ar }}</span></td>
                                        <td>{{ $brand->title_en }}</td>
                                        <td>{{ $brand->publisher }}</td>
                                        <td>{{ $brand->time }}</td>
                                        <td class="td-actions">
                                          <a href="{{ route('brand.edit', $brand->id) }}"><i class="la la-edit edit"></i></a>
                                          <form method="post" action="{{ route('brand.destroy', $brand->id) }}" style="display:inline">
                                                   {{csrf_field()}}
                                                   {{ method_field('DELETE') }}

                                             <button type="submit"><i class="la la-close delete"></i></button>
                                          </form>
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

    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

</div>
</div>
<!-- End Page Content -->
</div>






@include('layout/footer')
