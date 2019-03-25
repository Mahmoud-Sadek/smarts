<title>@yield('title', 'orders')</title>
@include('layout/header')






<!-- End Left Sidebar -->
<div class="content-inner">
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Begin Widget 07 -->
                <div class="widget widget-07 has-shadow">
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="styled-checkbox mt-2">
                                                <input type="checkbox" name="check-all" id="check-all">
                                                <label for="check-all"></label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Vendor Name</th>
                                        <th>Country</th>
                                        <th>Ship Date</th>
                                        <th><span style="width:100px;">Status</span></th>
                                        <th>Order Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

@foreach($orders as $orders)

                                    <tr>
                                        <td style="width:5%;">
                                            <div class="styled-checkbox mt-2">
                                                <input type="checkbox" name="cb3" id="cb3">
                                                <label for="cb3"></label>
                                            </div>
                                        </td>
                                        <td><span class="text-primary">{{ $orders->id }}</span></td>
                                        <td>{{ $orders->user2->name}}</td>
                                        <td>KSA</td>
                                        <td>{{ $orders->time }}</td>
                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">{{ $orders->status }}</span></span></td>
                                        <td>$107.55</td>
                                        <td class="td-actions">
                                          <a href="{{ route('order.show', $orders->id) }}"><i class="la la-eye view"></i></a>
                                            <form method="post" action="{{ route('order.destroy', $orders->id) }}" style="display:inline">
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
                    <!-- End Widget Body -->

                </div>
                <!-- End Widget 07 -->
            </div>
        </div>


    </div>

</div>
<!-- End Page Content -->
</div>
</div>










@include('layout/footer')
