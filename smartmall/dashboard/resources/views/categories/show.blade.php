<title>@yield('title', 'Show')</title>
@include('in-layout/header')


        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table">
                                    <thead>
                                        <th>صورة القسم</th>
                                        <th>الاسم بالعربي</th>
                                        <th>الاسم بالانجليزي</th>
                                        <th>الوقت</th>
                                        <th>الناشر</th>
                                        
                                        


                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            <td>
                                              <img style="width: 200px; height: 200px" src="../../storage/app/{{ $cats -> image }}" >  
                                            </td>

                                            <td>
                                                <p>{{ $cats -> title_ar }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $cats -> title_en }}</p>

                                            </td>

                                            <td>
                                                <p>{{ $cats -> time }}</p>

                                            </td> 

                                            <td>
                                                <p>{{ $cats -> publisher }}</p>

                                            </td>                                             

                                        </tr>
                                
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>


@include('in-layout/footer')


