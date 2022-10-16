@include('app.header') 
@include('app.navbar') 

<!-- forgetPass Start -->
<div class="container-xxl courses my-6 py-6 pb-0" style=" min-height: 80vh;">
    <div class="container" >
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                    <h3 class="mb-4">New Password</h3>
                            
                    @if(Session :: has('message_sent'))
                    <div class="alert alert-success">
                    {{ Session :: get('message_sent') }}
                    </div>
                    @elseif (Session :: has('message_not_sent'))
                    <div class="alert alert-danger">
                        {{ Session :: get('message_not_sent') }}
                        </div>
                @endif
            <form method="POST" action="{{ route('resetpassword') }}">
                @csrf                    

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light"
                                     id="password" placeholder="password" name="password">
                                    <label for="password">Create New Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light"
                                     id="password1" placeholder="password" name="password1">
                                    <label for="password1">Confirm Your Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Change</button>
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