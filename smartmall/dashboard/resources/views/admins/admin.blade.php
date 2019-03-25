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
                                        <button onclick="" class="add-new"><a href="{{ url('/admin/create') }}">اضافه مستخدم</a></button>

                                        <table id="sorting-table" class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>الاسم</th>
                                                    <th>نوع المستخدم</th>
                                                    <th>البريد الالكتروني</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


@foreach($admin as $admin)
                                                <tr>
                                                    <td>{{ $admin->name }}</td>
                                                    <td><?php
                                                       if ($admin->isadmin == 4) {
                                                         echo "مسؤل";
                                                       }elseif ($admin->isadmin == 5) {
                                                         echo "مدير";
                                                       }else {
                                                         echo "مورد";
                                                       }


                                                        ?></td>
                                                    <td>{{ $admin->admin_email }}</td>
                                                    <td class="td-actions">
                                                      <form method="post" action="{{ route('admin.destroy', $admin->id) }}" style="display:inline">
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

            </div>
        </div>
        <!-- End Page Content -->
    </div>



@include('layout/footer')
