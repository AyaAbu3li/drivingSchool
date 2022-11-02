@include('app.header') 
@include('app.navbar')
   <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Courses</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Courses Start -->
    <div class="container-xxl ">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tranding Courses</h6>
                <h1 class="display-6 mb-4">Our Courses Upskill You With Driving Training</h1>
            </div>
            <div class="row g-4 justify-content-center">
                
<!--                loop here-->
                @foreach ($courses as $one)

                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">${{ $one->price }}</div>
                            <h5 class="mb-3">{{ $one->name }}</h5>
                        </div>
                        <div class="text-center mt-auto"
                        style="background-color: #1064e4 !important;">
                            <img class="img-fluid" src="{{  asset($one->img)  }}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Courses End -->
    @include('app.footer') 
