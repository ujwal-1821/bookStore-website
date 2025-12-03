<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-warning text-white w-100"
               data-toggle="collapse" href="#navbar-vertical"
               style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                 id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Fiction <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="#" class="dropdown-item">Fantasy</a>
                            <a href="#" class="dropdown-item">Romance</a>
                            <a href="#" class="dropdown-item">Thriller</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Non-Fiction</a>
                    <a href="#" class="nav-item nav-link">Children's Books</a>
                    <a href="#" class="nav-item nav-link">Biographies</a>
                    <a href="#" class="nav-item nav-link">Educational</a>
                    <a href="#" class="nav-item nav-link">Self-Help</a>
                    <a href="#" class="nav-item nav-link">Comics</a>
                    <a href="#" class="nav-item nav-link">Science & Tech</a>
                    <a href="#" class="nav-item nav-link">History</a>
                    <a href="#" class="nav-item nav-link">Travel</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{ route('guest') }}" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-warning font-weight-bold border px-3 mr-1">B</span>BookNest
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('guest') }}" class="nav-item nav-link active">Home</a>
                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Browse Books</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('guest') }}" class="dropdown-item">Romance</a>
                                <a href="{{ route('guest') }}" class="dropdown-item">Fantasy</a>
                                <a href="{{ route('guest') }}" class="dropdown-item">Comics</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('guest') }}" class="dropdown-item">Our Story</a>
                                <a href="{{ route('guest') }}" class="dropdown-item">Contact Info</a>
                                <a href="{{ route('guest') }}" class="dropdown-item">Contact Us</a>
                            </div>
                        </div>
                        <a href="{{ route('guest') }}" class="nav-item nav-link">My Cart</a>
                        <a href="{{ route('guest') }}" class="nav-item nav-link">CheckOut</a>
                        
                    </div>

                    @if (Route::has('login'))
                        <div class="navbar-nav ml-auto py-0">
                            @auth
                                @if (Auth::user()->user_type === "admin")
                                    <a href="{{ route('admin.dashboard') }}" class="bg-warning nav-item nav-link border border-primary p-2">Admin Panel</a>
                                @else
                                    <a href="{{ route('user.dashboard') }}" class="bg-warning nav-item nav-link border border-primary p-2">My Dashboard</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="nav-item nav-link border border-primary p-2">Login</a>
                                <a href="{{ route('register') }}" class="nav-item nav-link border border-primary p-2">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>

            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="https://img.freepik.com/free-photo/top-view-hardback-books-with-copy-space_23-2148827214.jpg?t=st=1744722150~exp=1744725750~hmac=77b0d67b02063592c2f19a34716fb60435a086a092302c083a36b0c84d94b370&w=996" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-warning text-uppercase font-weight-medium mb-3">Welcome to Free Book</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Your Reading Journey Begins Here</h3>
                                <a href="#" class="btn btn-warning py-2 px-3">Browse Books</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="https://img.freepik.com/free-photo/dried-leaves-near-books-camera_23-2147888718.jpg?t=st=1744722119~exp=1744725719~hmac=d5a962b463af3267940fd43a9d21aebe5843d6e7cafcb7cf17148011402ead50&w=996" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-warning text-uppercase font-weight-medium mb-3">Free Shipping on Orders Over ₹500</h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4">Explore Bestsellers & New Arrivals</h3>
                                <a href="#" class="btn btn-warning py-2 px-3">Start Exploring</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-warning" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-warning" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
