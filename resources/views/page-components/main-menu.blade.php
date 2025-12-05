<div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
    <div class="navbar-nav mx-auto py-0">
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
                <a href="{{ route('about') }}" class="dropdown-item">Our Story</a>
                <a href="#" class="dropdown-item">Contact Info</a>
                <a href="#" class="dropdown-item">Contact Us</a>
            </div>
        </div>

        <a href="{{ route('guest') }}" class="nav-item nav-link">My Cart</a>
        <a href="{{ route('guest') }}" class="nav-item nav-link">Checkout</a>
    </div>

    @if (Route::has('login'))
        <div class="navbar-nav ml-auto py-0">
            @auth
                @if (Auth::user()->user_type === "admin")
                    <a href="{{ route('dashboard') }}" class="bg-warning nav-item nav-link border border-primary p-2">Admin Panel</a>
                @else
                    <a href="{{ route('dashboard') }}" class="bg-warning nav-item nav-link border border-primary p-2">My Dashboard</a>
                @endif
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link border border-primary p-2">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link border border-primary p-2">Register</a>
            @endauth
        </div>
    @endif
</div>
