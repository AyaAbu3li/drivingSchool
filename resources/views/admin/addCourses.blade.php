@include('admin.app.header')
@include('admin.app.navbar')
@include('admin.app.navbarAdmin')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Courses</h1>
     
    </div>  
    <!-- Content Row -->
    <div class="row">
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- add q -->
        <div class="col-xl-8 col-lg-7" style="padding-left: 10cm">
            <div class="card shadow mb-4">
              
                <div class="main">
                    <h1 style="padding-left: 3cm;padding-top: 0.25cm;color:blue"> Add Course</h1>
                    <form method="POST" action="addcourse">
                        @csrf
                        <div class = "adminpanel" style="padding: 1cm;">
                            <form action = "" method = "post">
                            <table style="padding-left: 1cm;"> 
                               
                                <tr>
                                    <div class="form-group " >
                                        <label> Choose Course photo:</label>
                                        <input class="form-control form-control-user" required name="photo" type="file" id="photo" style="padding-bottom: 1cm; padding-top:0.25cm" >
                                         </div>   
                                </tr>

                                <tr>
                                    <td>Course Name</td>
                                    <td>:</td>
                                    <td><input type = "text" name ="name" placeholder = " " required/></td>
                                </tr>
                                
                                <tr>
                                    <td>Course Price</td>
                                    <td>:</td>
                                    <td><input type = "text" name ="price" placeholder = "  " required/></td>
                                </tr>
                               
              
                                
                             
                                </tr>
                                
                                <tr>
                                    <td colspan = "3" align = "center" style="padding-top:0.5cm; padding-left: 2cm;" >
                                        <input type = "submit" value = "Add A Courses"class="btn btn-primary btn-user btn-block"/>
                                   </td>
                                </tr>
                            </table>
                            </form>
                        </div>
                    </form>
                    </div>

                </div>        
			

            </div>
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
<!-- End of Main Content -->



</div>
<!-- End of Content Wrapper -->

@include("admin.app.footer")