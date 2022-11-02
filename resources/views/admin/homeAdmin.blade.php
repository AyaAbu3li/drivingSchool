@include("admin.app.header")
@include("admin.app.navbar")
@include("admin.app.navbarAdmin")

  <!-- Begin Page Content -->
  <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800" style="text-align: center">Welcome admin to your panel</h1>
        
       </div>

       <!-- Content Row -->
       <div class="row">

           <!-- add q -->
           <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-primary shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                   <a  href="{{url("/addQuestion")}}">Add Question</div></a>
                                  
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
                                                    <a  href="{{url("/addEmployee")}}">  Add Team Member</div></a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a  href="{{url("/addCourses")}}">Add Courses</div></a>
                                               
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
                                                       <a  href="{{url("/addSign")}}">   Add Sign</div></a>
                                                  
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                  
                               <!-- Earnings (Monthly) Card Example -->
                               <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    <a  href="{{url("/questionList")}}">   Question List</div></a>
                                               
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
                                                <a  href="{{url("/teams")}}">   All TEAM</div></a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <a  href="{{url("/allCourses")}}">ALL Courses</div></a>
                                           
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
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                   <a  href="{{url("/students")}}">  Students</div></a>
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