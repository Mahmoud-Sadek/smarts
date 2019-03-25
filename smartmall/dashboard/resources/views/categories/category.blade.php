<title>@yield('title', 'Category')</title>
@include('layout/header')


      <div class="content-inner">
          <div class="container-fluid">

              <div class="row">
                  <div class="col-xl-12">
                      <!-- Sorting -->
                      <div class="widget has-shadow">
                          <div class="widget-body">
                              <div class="table-responsive">
                                <button onclick="" class="add-new"><a href="{{ url('/category/create') }}">اضافة قسم رئيسي جديد</a></button>
                                  <table id="sorting-table" class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>الصورة</th>
                                              <th>الاسم بالعربية</th>
                                              <th>الاسم بالانجليزية</th>
                                              <th>تاريخ الاضافة</th>
                                              <th>الناشر</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>


 @foreach($cats as $cat)
                                          <tr>
                                              <td><img style="width:100px; height:100px" src="storage/app/{{ $cat->image }}"></td>
                                              <td>{{ $cat->title_ar }}</td>
                                              <td>{{ $cat->title_en }}</td>
                                              <td>{{ $cat->time }}</td>
                                              <td>{{ $cat->publisher }}</td>
                                              <td class="td-actions">
                                                  <a href="{{ route('category.edit', $cat->id) }}"><i class="la la-edit edit"></i></a>
                                                  <form method="post" action="{{ route('category.destroy', $cat->id) }}" style="display:inline">
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
