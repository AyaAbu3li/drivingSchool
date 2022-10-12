@include('app.header') 
@include('app.navbar') 

<!-- forgetPass Start -->
<div class="container-xxl courses my-6 py-3 pb-0" style=" min-height: 60vh;">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                    <h3 class="mb-4">Forget Password</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                        <div class="alert-danger alert">
                                            <ul class="my-0 list-unstyled">
                                                <li>
                                                    The Email address dose not exist
                                                </li>
                                            </ul>
                                        </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Enter Email address</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forgetPass End -->


@include("app.footer")