@include('app.header') 
@include('app.navbar') 

<!-- Reg Start -->
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container" >
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                    <h3 class="mb-4">Creare an Account</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light"  id="name" placeholder="name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light"  id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Your Email address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light" id="password" placeholder="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light" id="password1" placeholder="password">
                                    <label for="password1">Repeat Your Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
                            </div>
                            <div class="col-12">
                                <h5 class="mb-4">Have already an account?
                                    <a href="login.html" class="mb-4" style="text-decoration: none;">Login here.</a></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reg End -->


@include("app.footer")