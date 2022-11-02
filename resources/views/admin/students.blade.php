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
                    <h1 class="h3 mb-2 text-gray-800">Students</h1>
                    <p class="mb-4">Stusents in driving school. </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="color: blue">ALL STUDENTS </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Name</th>
                                            <th>Email</th>
                                           
                                         
                                        </tr>

                                    </thead>
                                    
                                    <tbody>
                                    </tbody>
                                   @foreach ($users as $item )
                                   <tr>
                                   
                                    <th> {{$loop->iteration }}</th>
                                    <th> {{$item->name}}</th>
                                    <th>{{$item->email}}</th>
                                   
                                 
                                </tr>
                                   @endforeach
                                        </tr>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
            </div>
            <!-- End of Main Content -->
@include('admin.app.footer')