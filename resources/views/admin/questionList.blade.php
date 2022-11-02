@include("admin.app.header")
@include("admin.app.navbar")
@include("admin.app.navbarAdmin")

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Questions</h1>
                     
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- add q -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div onclick=" " class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a  href="{{url("/addQuestion")}}">     Add Question</div></a>
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a  href="{{url("/questionList")}}">      Question List</div> </a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- add q -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                              
                                <div class="main">
                                    <h1 style="padding-left: 5cm; padding-top: 0.5;color:blue"> Question List</h1>
                                  
                                        <div class = "quelist">
                                            <table class = "tblone"style="padding-left: 3cm;>
                                            <tr style="padding-left: 3cm;">
                                                <th width = "10%"style="padding-left: 1cm;color:black">No</th>
                                                <th width = " 20%"style="padding-left: 1cm;color:black">Type Questions</th>
                                                <th width = " 50%"style="padding-left: 1cm;color:black">Questions</th>
                                                <th width = "20%"style="color:black">Action</th>
                                            </tr>
                                    
                                            @foreach ($exams as $item )
                                            <tr style="padding-left: 5cm;">

                                            
                                             <th style="padding-left: 1cm;"> {{$loop->iteration }}</th>
                                             <th style="padding-left: 1cm;"> {{$item->examType}}</th>
                                             <th style="padding-left: 1cm;">{{$item->question}}</th>
                                             <td>
                                                <form action="{{url('delete-q/'.$item->id)}}" method="POST" >
                                                    @csrf
                                                    @method('delete')
                                                <button onclick="{{url("/questionList")}}"  >delete</button>

                                                </form>
                                            </td>
                                          
                                         </tr>
                                            @endforeach
                                            
                                   
                                            </table>
                                        <div/>
                                </div>
                            </div>        
                        </div>
                    </div>        
                </div>
            </div>        
        </div>
                                <div class="row">
                                </div>
            
                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-5">
                                        </div>
                            <!-- Content Row -->
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-6 mb-4">
                                <div class="col-lg-6 mb-4">
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>  

@include("admin.app.footer")
    