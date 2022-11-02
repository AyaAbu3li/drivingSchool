@include("admin.app.header")
@include("admin.app.navbar")
@include("admin.app.navbarAdmin")
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            
           
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Courses</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="color: blue">
                           
                            <i class="m-0 font-weight-bold text-primary"  ></i> All Courses
                              <a  href="{{url("/addCourses")}}" style="margin-left: 23cm" class="btn btn-outline-primary btn-sm float-end">
                                 + Add New course</a> 
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Name</th>
                                            <th>price</th>
                                            <th> photo</th>
                                         
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($courses as $item)
                                        <tr>
                                          
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />
     
     
                                            </td>
                                        </tr>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         @include('admin.app.footer')

