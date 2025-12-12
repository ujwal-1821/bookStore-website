<x-guest-layout>

<style>
    body {
        background: linear-gradient(to right, #1f0c4d, #5b21b6, #7c3aed);
        font-family: Arial, Helvetica, sans-serif;
    }
/* 
    .container {
        max-width: 450px;
        margin: 70px auto;
        background: rgba(255,255,255,0.95);
        padding: 30px 35px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.4);
    } */

    .logo-icon {
        background: #ffca28;
        padding: 2px 13px;
        border-radius: 10px;
        color: #1a237e;
        font-size: 26px;
        font-weight: 800;
        margin-right: 8px;
    }

    h2 {
        text-align: center;
        font-size: 28px;
        color: #1a237e;
        margin-bottom: 25px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    label {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 6px;
        display: block;
        color: #333;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #bbb;
        background: #f7f7f7;
        font-size: 14px;
        margin-bottom: 20px;
        transition: all 0.2s ease;
    }

    input:focus {
        background: #fff;
        border-color: #5b21b6;
        box-shadow: 0 0 5px rgba(90,20,200,0.4);
        outline: none;
    }

    .btn {
        width: 100%;
        padding: 14px;
        border-radius: 50px;
        background: white;
        border: 1px solid #ccc;
        cursor: pointer;
        font-size: 17px;
        font-weight: bold;
        transition: 0.2s;
    }

    .btn:hover {
        background: #f0f0f0;
    }

    .login-link,
    .register-link {
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
        color: black;
    }

    .login-link a,
    .register-link a {
        color: red;
        text-decoration: underline;
    }

    .remember-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .remember-row label {
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 0;
        font-weight: normal;
    }

    .status-message {
        max-width: 450px;
        margin: 20px auto 0;
        padding: 10px 15px;
        background: rgba(34,197,94,0.15);
        border: 1px solid rgba(34,197,94,0.6);
        color: #166534;
        border-radius: 8px;
        font-size: 14px;
    }

    .error-text {
        margin-top: -15px;
        margin-bottom: 10px;
        font-size: 13px;
        color: #e11d48;
    }
</style>

{{-- Session status (like "Password reset link sent") --}}
@if (session('status'))
    <div class="status-message">
        {{ session('status') }}
    </div>
@endif

<!-- Form card -->
<div class="container">

    <h2><span class="logo-icon">FreeBooks</span> LOGIN</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <label for="email">Email:</label>
        <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Email"
            required
            autofocus
            autocomplete="username"
        >
        @error('email')
            <div class="error-text">{{ $message }}</div>
        @enderror

        {{-- Password --}}
        <label for="password">Password:</label>
        <input
            id="password"
            type="password"
            name="password"
            placeholder="Password"
            required
            autocomplete="current-password"
        >
        @error('password')
            <div class="error-text">{{ $message }}</div>
        @enderror

        {{-- Remember & Forgot --}}
        <div class="remember-row">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                Remember me
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color:#4f46e5; text-decoration:underline;">
                    Forgot password?
                </a>
            @endif
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="register-link">
        Don't have an account?
        <a href="{{ route('register') }}">Register</a>
    </p>

</div>

</x-guest-layout>
