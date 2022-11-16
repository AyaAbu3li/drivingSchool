@include('app.header') 
@include('app.navbar') 

<!-- Login Start -->
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container" >
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                    <h3 class="mb-4">Please login to your account</h3>

                    @if(Session :: has('message_sent'))
                    <div class="alert alert-success">
                    {{ Session :: get('message_sent') }}
                    </div>
                    @elseif (Session :: has('message_not_sent'))
                    <div class="alert alert-danger">
                        {{ Session :: get('message_not_sent') }}
                        </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light"
                                    id="gmail" placeholder="Gurdian Email" name="email">
                                    <label for="gmail">Email address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light"
                                    id="password" placeholder="password" name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                            </div>
                            <div class="col-12">
                                <h5 class="mb-4">Don't have an account?
                                    <a href="{{ url('/signup') }}" class="mb-4" style="text-decoration: none;">Create account.</a></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->

@include("app.footer")