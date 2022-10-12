@include('app.header') 
@include('app.navbarUser') 

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">.......</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="exams.html">Exams</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">........</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<div class="container-xxl py-6" style="margin-top: -5rem;">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-3 wow fadeInUp">
                <div class="position-relative h-100">

                    <h4 class="text-primary mb-2">Timer</h4>

                    <div class="row row-cols-5 text-center">
                        <button type="button" class="btn btn-primary exbutton">1</button>
                        <button type="button" class="btn btn-primary exbutton">2</button>
                        <button type="button" class="btn btn-primary exbutton">3</button>
                        <button type="button" class="btn btn-primary exbutton">4</button>
                        <button type="button" class="btn btn-primary exbutton">5</button>
                        <button type="button" class="btn btn-primary exbutton">6</button>
                        <button type="button" class="btn btn-primary exbutton">7</button>
                        <button type="button" class="btn btn-primary exbutton">8</button>
                        <button type="button" class="btn btn-primary exbutton">9</button>
                        <button type="button" class="btn btn-primary exbutton">10</button>
                    </div>
                    <br>
                    <div class="row row-cols-2 text-center">
                        <h5><a href="exams3.html" class="col btn btn-primary">Back</a></h5>
                        <h5><a href="exams3.html" class="col btn btn-primary">Next</a></h5>

                    </div>

                    </div>

            </div>
            <div class="col-lg-7 wow fadeInUp">
                <div class="row row-cols-1 text-center">
                    <!-- loop0 here -->
                    <h4 class="text-primary mb-2">What is my name?<img src=""></h4>

                    <button type="button" class="btn btn-primary exbutton">9</button>
                    <button type="button" class="btn btn-primary exbutton">9</button>
                    <button type="button" class="btn btn-primary exbutton">9</button>
                    <button type="button" class="btn btn-primary exbutton">9</button>

                </div>

            </div>
        </div>
    </div>
</div>


@include("app.footer")