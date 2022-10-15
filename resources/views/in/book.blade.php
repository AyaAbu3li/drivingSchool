@include('app.header') 
@include('app.navbarUser') 

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Tauria Book</h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl courses my-6 py-3 pb-0">
    <div class="container">
        <div class="row g-4 justify-content-center" >
                    <div class="row g-3">
<iframe style="height: 400%;"  src="{{  asset("assets/pdf.pdf")  }}"></iframe>
                    </div>

        </div>
    </div>
</div>

@include("app.footer")