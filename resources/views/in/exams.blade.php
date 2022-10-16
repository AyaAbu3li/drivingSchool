@include('app.header') 
@include('app.navbar') 


<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" style="margin-bottom: 2rem;">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Exams</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- loop1 here -->
<div class="container-xxl py-10">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
                <div class="row row-cols-3 text-center">
                    <!-- loop2 here -->
                    <div class="team-item position-relative" onclick="location.href='exams2.html';" id="smallbox">
                        <div class="position-relative">
                            <img class="img-fluid rounded-start" src="../images/SignAndSignal5.jpg" alt=""
                                 style="  width: auto;   max-height: 120px;">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2"><a>Full Name</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include("app.footer")