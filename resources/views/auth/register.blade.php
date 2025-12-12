<x-guest-layout>

<style>
    body {
        background: linear-gradient(to right, #1f0c4d, #5b21b6, #7c3aed);
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        max-width: 450px;
        margin: 70px auto;
        background: rgba(255,255,255,0.95);
        padding: 30px 35px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.4);
    }

    .logo-area {
        text-align: center;
        margin-bottom: 25px;
    }

    .logo-box {
        display: inline-flex;
        align-items: center;
        gap: 12px;
    }

    .logo-icon {
        background: #ffca28;
        padding: 2px 13px;
        border-radius: 10px;
        color: #1a237e;
        font-size: 26px;
        font-weight: 800;
    }

    .logo-text {
        font-size: 32px;
        font-weight: 700;
        color: white;
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

    input {
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

    .login-link {
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
        color: black;
    }

    .login-link a {
        color: red;
        text-decoration: underline;
    }
</style>

<!-- Logo -->
<!-- <div class="logo-area">
    <div class="logo-box">
        <div class="logo-icon">FB</div>
        <div class="logo-text">FreeBook</div>
    </div>
</div> -->

<!-- Form card -->
<div class="container-fluid">

    <h2><span class="logo-icon">FreeBooks</span> REGISTRATION</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Full Name:</label>
        <input type="text" name="name" placeholder="Full Name" required>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit" class="btn">Register</button>
    </form>

    <p class="login-link">
        Already registered?
        <a href="{{ route('login') }}">Login</a>
    </p>

</div>

</x-guest-layout>
