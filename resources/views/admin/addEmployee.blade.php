@include("admin.app.header")
@include("admin.app.navbar")
@include("admin.app.navbarAdmin")

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
					<div class="container">

						<div class="card o-hidden border-0 shadow-lg my-5">
							<div class="card-body p-0">
								<!-- Nested Row within Card Body -->
								<div class="row">
								 <!--   <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
									<div class="col-lg-7">
										<div class="p-5">
											<div class="text-center">
												<h1 class="h4 text-gray-900 mb-4">Add Team Member</h1>
											</div>
											
												<form method="POST" action="addemployee"class="user">
														@csrf 
													
												<div class="form-group row">
													<div class="col-sm-6 mb-3 mb-sm-0">
														<input type="text" class="form-control form-control-user" id="exampleFirstName"
															placeholder="Member Name" name ="name"required>
													</div>
													
												</div>
												<div class="form-group">
													<input type="email"name ="email" class="form-control form-control-user" id="exampleInputEmail"
														placeholder="Email Address"required>
												</div>
												<div class="form-group row">
													<div class="col-sm-6 mb-3 mb-sm-0">
														<input type="phone" name ="phone"class="form-control form-control-user"
															placeholder="Phone Number"required>
													</div>
												  
												</div>
												<div class="form-group " >
												<label> Choose team member photo:</label>
												<input class="form-control form-control-user" required name="photo" type="file" id="photo" style="padding-bottom: 1cm; padding-top:0.25cm" >
										         </div>
										
												<input type = "submit"  href="{{url("/addEmployee")}}" value = "Add A Member"  class="btn btn-primary btn-user btn-block">
											</form>
										</div>
									</div>
									
								</div>
								
							</div>
						
						</div>
				
					</div>        
                    </div>
			
                    <!-- Content Row -->

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
            <!-- End of Main Content -->
    @include("admin.app.footer")  