@include('app.header') 
@include('app.navbar') 


<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" style="margin-bottom: 2rem;">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Exams</h1>
    </div>
</div>
<!-- Page Header End -->


<div class="container-xxl py-10">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
                <div class="row row-cols-3 text-center">
                    <!-- loop0 here -->
                    @foreach ($examType as $Type)
                    <form method="POST" action="{{ route('exam') }}">
                        @csrf
                    <input type="text" value="{{ $Type->examType }}" name="examType" style="visibility: hidden;">

                    <h5><button type="submit"
                         
                         class="col btn btn-primary w-100 py-3">{{ $Type->examType }}</a></h5>
                        </form>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>


@include("app.footer")