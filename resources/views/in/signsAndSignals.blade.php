@include('app.header') 
@include('app.navbar') 

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
                    @foreach ($sectionName as $Name)

                    <h5><a href="#{{ $Name->sectionName }}" class="col btn btn-primary w-100 py-3">{{ $Name->sectionName }}</a></h5>
                
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<!-- loop1 here -->
@foreach ($sectionName as $Name)
<div class="container-xxl py-10" id="{{ $Name->sectionName }}" >
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
                <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                    <h5 
                        class="text-primary text-uppercase mb-2">Section: {{ $Name->sectionName }}</h5>
                </div>

                <div class="row row-cols-3 text-center">
                    <!-- loop2 here -->
                    @foreach ($data as $sign) 
                    @foreach ($sign as $signn)
                    @if ($signn->sectionName != $Name->sectionName) @break @endif
                    <div class="team-item position-relative" id="id">
                        <div class="position-relative">
                            <img class="img-fluid rounded-start" src="{{  asset($signn->img)  }}" alt=""
                                 style="  width: auto;   max-height: 120px;">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2"> {{ $signn->signName }}</h5>
                        </div>
                    </div>
                    @endforeach
                    @endforeach

                </div>
             </div>
        </div>
    </div>
</div>
@endforeach

@include("app.footer")
