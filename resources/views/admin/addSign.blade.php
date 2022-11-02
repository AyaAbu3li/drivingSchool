@include("admin.app.header")
@include("admin.app.navbar")
@include("admin.app.navbarAdmin")
<style>
	.main h1{
		
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#1b0c5e;
	}
    .textarea {
  background-color: #f2eeee;
  color: #f1eaea;
  padding: 1em;
  border-radius: 10px;
  border: 2px solid transparent;
  outline: none;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
  font-size: 16px;
  line-height: 1.4;
  width: 300px;
  height: 100px;

  transition: all 0.2s;

}

.textarea:hover {
  cursor: pointer;
  background-color: #eeeeee;
}

.textarea:focus {
  cursor: text;
  color: #333333;
  background-color: white;
  border-color: #333333;
}
    
</style>
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
												<h1 class="h4 text-gray-900 mb-4" style="color: blue">Signs and Signals
                                                </h1>
											</div>
											
                        <form method="POST" action="addsign" class="user">
                          @csrf
												<div class="form-group row">
													<div class="col-sm-6 mb-3 mb-sm-0">
														<input style="width: 5cm;" type="text" class="form-control form-control-user" id="exampleFirstName"required
															placeholder="Sign Name" name="name">
													</div>
                                                <div class="type">
                                                    <label>  Section Signs:</label>
                                                    <select name="sign" id="sign" style="height: 1.25cm;width: 4cm; border-radius: 00.5cm;"required>
                                                      @foreach ($signs_category as $item )
                                                      <option value="{{$item->id}}">{{$item->sectionName}}</option>
                                                       
                                                      @endforeach
                                                      </select>
                                                </div>
												</div>
												
												<div class="form-group row" style="padding-left: 0.5cm;">
													<textarea class="textarea" name="details" placeholder="Sign details .."required></textarea>
												  
												</div>
                        <div class="form-group " >
                          <label> Choose Sign or Signal photo:</label>
                          <input class="form-control form-control-user" required name="photo" type="file" id="photo" style="padding-bottom: 1cm; padding-top:0.25cm" >
                               </div>
											
                        <input type = "submit" value = " Add "class="btn btn-primary btn-user btn-block" style="width: 3cm;"/>
										 
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
@include('admin.app.footer')