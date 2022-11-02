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
                                                <a  href="{{url("/questionList")}}">   Question List</div></a>
                                           
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
                                    <h1 style="padding-left: 5cm;padding-top: 0.25cm; color:blue"> Add Question</h1>
                                    <form method="POST" action="addquestion">
                                        @csrf
                                        <div class = "adminpanel" style="padding: 1cm;">
                                            <form action = "" method = "post">
                                            <table style="padding-left: 1cm;"> 
                                                <tr>
                                                    <td>Question Type:</td>
                                                    <td>:</td>
                                                    <td>
                                                        
                                                      <!-- <input type = "checkbox" name ="rightAns" required/> --> 
                                                      <select name="question" id="question" style="width: 5.4cm">
                                                        @foreach ($exams_category as $item )
                                                        <option value="{{$item->id}}">{{$item->examType}}</option>
                                                        @endforeach
                                                      </select>
                                                    

                                                </td>
                                                </tr>
                                                
                                                <tr style="padding: 2cm;">
                                                    <td>Question</td>
                                                    <td>:</td>
                                                    <td><input type = "text" name ="ques" placeholder = "Enter Question...." required/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Choice One</td>
                                                    <td>:</td>
                                                    <td><input type = "text" name ="ans1" placeholder = "Enter Choice One...." required/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Choice Two</td>
                                                    <td>:</td>
                                                    <td><input type = "text" name ="ans2" placeholder = "Enter Choice Two...." required/></td>
                                                </tr>
                                                <tr>
                                                    <td>Choice Three</td>
                                                    <td>:</td>
                                                    <td><input type = "text" name ="ans3" placeholder = "Enter Choice Three...." required/></td>
                                                </tr>
                                                <tr>
                                                    <td>Choice Four</td>
                                                    <td>:</td>
                                                    <td><input type = "text" name ="ans4" placeholder = "Enter Choice Four...." required/></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Correct No.</td>
                                                    <td>:</td>
                                                    <td>
                                                      <!-- <input type = "checkbox" name ="rightAns" required/> --> 
                                                      <select name="correctQ" id="correctQ">
                                                        <option value="one">one</option>
                                                        <option value="two">two</option>
                                                        <option value="three">three</option>
                                                        <option value="four">four</option>
                                                      </select>
                                                    

                                                </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan = "3" align = "center" style="padding-top:0.5cm; padding-left: 2cm;" >
                                                        <input type = "submit" value = "Add A Question"class="btn btn-primary btn-user btn-block"/>
                                                   </td>
                                                </tr>
                                            </table>
                                            </form>
                                        </div>
                                    </form>
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