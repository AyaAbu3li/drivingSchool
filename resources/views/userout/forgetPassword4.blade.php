@include('app.header') 
@include('app.navbar') 

<!-- forgetPass Start -->
<div class="container-xxl courses my-6 py-3 pb-0" style=" min-height: 50vh;">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                        <div class="row g-3">
                            <div class="col-12">
                                        <div class="alert-success alert">
                                            <ul class="my-0 list-unstyled">
                                                <li>
                                                    Your password changed <br>
                                                    Now you can log In with new your password
                                                </li>
                                            </ul>
                                        </div>
                            </div>
                            <div class="col-12">
                                <a href="login.html" class="btn btn-primary w-100 py-3" type="submit">OK</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forgetPass End -->

@include("app.footer")