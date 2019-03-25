<title>@yield('title', 'Admins')</title>
@include('layout/header')


            <div class="content-inner">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Sorting -->
                            <div class="widget has-shadow">
                                <div class="widget-body">
                                    <div class="table-responsive">

                                        <table id="sorting-table" class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>الاسم</th>
                                                    <th>البريد الالكتروني</th>
                                                </tr>
                                            </thead>
                                            <tbody>


@foreach($users as $users)
                                                <tr>
                                                    <td>{{ $users->name }}</td>
                                                    <td>{{ $users->email }}</td>

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
