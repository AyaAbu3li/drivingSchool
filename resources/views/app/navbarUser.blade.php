
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="Home.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="Home.html" class="nav-item nav-link">Home</a>
            <a href="roadsafety.html" class="nav-item nav-link ">Road Safety</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Study</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="Book.html" class="dropdown-item">Book</a>
                    <a href="signsAndSignals.html" class="dropdown-item">Signs and Signals</a>
                </div>
            </div>
            <a href="exams.html" class="nav-item nav-link">exams</a>
            <a href="{{ url('/') }}" class="nav-item nav-link">LogOut</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->