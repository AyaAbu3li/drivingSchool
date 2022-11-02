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
            @guest
            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('/courses') }}" class="nav-item nav-link">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('/login') }}" class="dropdown-item">Sign In</a>
                    <a href="{{ url('/signup') }}" class="dropdown-item">Sign Up</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            @else
            <a href="{{ url('/in') }}" class="nav-item nav-link">Home</a>
            <a href="{{ url('/roadsafety') }}" class="nav-item nav-link">Road Safety</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Study</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('/Book') }}" class="dropdown-item">Book</a>
                    <a href="{{ url('/signsAndSignals') }}" class="dropdown-item">Signs and Signals</a>
                </div>
            </div>
            <a href="{{ url('/exams') }}" class="nav-item nav-link">exams</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link">LogOut</a>
            @endguest
        </div>
    </div>
</nav>
<!-- Navbar End -->
@yield('content')