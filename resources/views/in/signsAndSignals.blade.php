@include('app.header') 
@include('app.navbarUser') 

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Signs and Signals</h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-10">
<div class="container">
    <div class="row g-4 justify-content-center" >
        <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
    <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
        <h5 class="text-primary text-uppercase mb-2">Click on the section you want to view:-</h5>
    </div>
    <div class="row row-cols-3 text-center">
        <!-- loop0 here -->

        <h5><a href="#id" class="col btn btn-primary w-100 py-3">Column</a></h5>
        <h5><a href="" class="col btn btn-primary w-100 py-3">Column</a></h5>
        <h5><a href="" class="col btn btn-primary w-100 py-3">Column</a></h5>
        <h5><a href="" class="col btn btn-primary w-100 py-3">Column</a></h5>
        <h5><a href="" class="col btn btn-primary w-100 py-3">Column</a></h5>
        <h5><a href="" class="col btn btn-primary w-100 py-3">Column</a></h5>
    </div>

</div>
</div>
</div>
</div>

<!-- loop1 here -->
<div class="container-xxl py-10">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
                <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                    <h5 class="text-primary text-uppercase mb-2">Section:-</h5>
                </div>

                <div class="row row-cols-3 text-center">
                    <!-- loop2 here -->
                    <div class="team-item position-relative" id="id">
                        <div class="position-relative">
                            <img class="img-fluid rounded-start" src="../images/SignAndSignal5.jpg" alt=""
                                 style="  width: auto;   max-height: 120px;">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                        </div>
                    </div>

                </div>
             </div>
        </div>
    </div>
</div>


@include("app.footer")