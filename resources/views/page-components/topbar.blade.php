<!-- Topbar Start -->
<style>
    .topbar-gradient {
        background: linear-gradient(105.4deg, #0b033c 4.91%, #8960d9 98.92%);
    }

    .search-box input {
        border-right: none !important;
    }

    .search-box .input-group-text {
        border-left: none !important;
        cursor: pointer;
    }
</style>

<div class="container-fluid">
    <!-- Top Black/Purple Gradient Row -->
    <div class="row topbar-gradient py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-white" href="">FAQs</a>
                <span class="text-light px-2">|</span>
                <a class="text-white" href="">Help</a>
                <span class="text-light px-2">|</span>
                <a class="text-white" href="">Support</a>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white px-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white px-2" href=""><i class="fab fa-instagram"></i></a>
                <a class="text-white pl-2" href=""><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Logo + Search + Icons -->
    <div class="row align-items-center py-3 px-xl-5 topbar-gradient">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold text-white">
                    <span class="font-weight-bold border px-3 mr-1" style="color:#F2C94C;">FB</span>FreeBook
                </h1>
            </a>
        </div>

        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group search-box">
                    <input type="text" id="searchBox" class="form-control" placeholder="Search for free books">
                    <div class="input-group-append">
                        <span class="input-group-text bg-white text-dark">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border text-white">
                <i class="fas fa-heart text-danger"></i>
                <span class="badge">0</span>
            </a>

            <a href="" class="btn border text-white">
                <i class="fas fa-shopping-cart text-white"></i>
                <span class="badge">0</span>
            </a>

            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->user_type === "admin")
                        <a href="{{ route('dashboard') }}" class="btn bg-warning border rounded-circle">
                            <span class="text-uppercase fw-bold text-dark">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" class="btn bg-warning border rounded-circle">
                            <span class="text-uppercase fw-bold text-dark">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn bg-warning border rounded-circle">
                        <i class="fas fa-user text-dark"></i>
                    </a>
                @endauth
            @endif
        </div>
    </div>
</div>
<!-- Topbar End -->
