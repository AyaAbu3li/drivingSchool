@include('app.header') 
@include('app.navbar') 

<!-- forgetPass Start -->
<div class="container-xxl courses my-6 py-3 pb-0" style=" min-height: 60vh;">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-5 my-6 mb-0 wow fadeInUp">
                <div class="bg-primary text-center p-5"
                     style="background-color:white !important;">
                    <h3 class="mb-4">Code Verification</h3>
                    
                        @if(Session :: has('message_sent'))
                        <div class="alert alert-success">
                        {{ Session :: get('message_sent') }}
                        </div>
                        @elseif (Session :: has('message_not_sent'))
                        <div class="alert alert-danger">
                            {{ Session :: get('message_not_sent') }}
                            </div>
                    @endif
                <form method="POST" action="{{ route('forgetPass2') }}">
                    @csrf

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light"
                                     id="code" placeholder="code" name="code">
                                    <label for="code">Enter Code</label>
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