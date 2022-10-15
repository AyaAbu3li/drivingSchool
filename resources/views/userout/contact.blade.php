@include('app.header') 
@include('app.navbar')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" style="min-height: 450px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://maps.google.com/maps?q=palestine%20nablus%20Sufian%20street&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp">
                <h6 class="text-primary text-uppercase mb-2">Contact Us</h6>
                <h1 class="display-6 mb-4">If You Have Any Query, Please Contact Us</h1>
                    @if(Session :: has('message_sent'))
                        <div class="alert alert-success">
                        {{ Session :: get('message_sent') }}
                        </div>
                        @elseif (Session :: has('message_not_sent'))
                        <div class="alert alert-danger">
                            {{ Session :: get('message_not_sent') }}
                            </div>
                    @endif
                <form method="POST" action="{{ route('contact') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light"
                                 id="name" placeholder="Your Name" name="name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light"
                                 id="email" placeholder="Your Email" name="email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light"
                                 id="subject" placeholder="Subject" name="subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 bg-light" placeholder="Leave a message here"
                                 id="message" style="height: 150px" name="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@include("app.footer")