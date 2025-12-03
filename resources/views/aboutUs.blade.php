@extends('layouts.app')
<style>
    .about-img {
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .about-section p {
        color: #555;
        font-size: 16px;
        line-height: 1.7;
    }
    
    .testimonial-card {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(5px);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: 0.3s;
    }

    .testimonial-card:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.12);
    }
</style>
@section('content')

<!-- HEADER BANNER -->
<div class="container-fluid py-5" style="background: #fff7d6;">
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            <h1 class="display-3 text-dark font-weight-bold">About FreeBook</h1>
            <p class="text-dark mt-3">
                A community-driven platform created for free learning, discovery, and endless reading possibilities.
            </p>
        </div>
    </div>
</div>


<!-- OUR STORY -->
<div class="container pt-3 pb-5 about-section">
    <div class="row mt-5">

        <div class="col-lg-6 mb-4">
            <h2 class="font-weight-bold text-dark mb-4">Our Story</h2>

            <p>
                FreeBook was built with a mission to make <strong>knowledge available to everyone</strong>.
                From novels to educational books — we offer free quality content for readers worldwide.
            </p>

            <p>
                We believe reading should be accessible to all, regardless of background or financial situation.
            </p>

            <p>
                Today, FreeBook is growing every day with thousands of readers joining the community.
            </p>

            <a href="#" class="btn btn-warning text-dark font-weight-bold px-4 py-2 mt-3 shadow-sm">
                Join Our Community
            </a>
        </div>

        <div class="col-lg-6 mb-4 text-center">
            <img src="https://img.freepik.com/free-photo/education-day-arrangement-table_23-2149034865.jpg"
                alt="About Image"
                class="img-fluid about-img">
        </div>

    </div>
</div>

<!-- MISSION & VALUES -->
<div class="container-fluid py-5" style="background: #f4f4f4;">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="font-weight-bold text-dark">Our Mission & Values</h2>
            <p class="text-muted">What drives FreeBook forward</p>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 12px;">
                    <i class="fa fa-book-open fa-3x text-warning mb-3"></i>
                    <h5 class="font-weight-bold" style="color:#0b033c;">Promote Free Learning</h5>
                    <p style="color:rgb(63, 63, 63)
    ;">We give everyone access to books without barriers.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 12px;">
                    <i class="fa fa-users fa-3x text-warning mb-3"></i>
                    <h5 class="font-weight-bold" style="color:#0b033c;">Build a Global Community</h5>
                    <p style="color:rgb(63, 63, 63)
    ;">Readers across the world learn and grow here.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 12px;">
                    <i class="fa fa-globe fa-3x text-warning mb-3"></i>
                    <h5 class="font-weight-bold" style="color:#0b033c;">Connect Worldwide</h5>
                    <p style="color:rgb(63, 63, 63)
    ;">Reaching students, learners, and book lovers everywhere.</p>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- TEAM SECTION -->
<div class="container py-5" >
    <div class="text-center mb-5">
        <h2 class="font-weight-bold text-dark">Meet Our Team</h2>
        <p class="text-muted">Dedicated people who make FreeBook better every day</p>
    </div>

    <div class="row g-4">

        <!-- Member 1 -->
        <div class="col-md-3 text-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                 class="rounded-circle shadow mb-3"
                 width="150" alt="">
            <h5 class="font-weight-bold text-dark mb-0">John Doe</h5>
            <p class="text-muted">Founder & CEO</p>
        </div>

        <!-- Member 2 -->
        <div class="col-md-3 text-center">
            <img src="https://randomuser.me/api/portraits/women/44.jpg"
                 class="rounded-circle shadow mb-3"
                 width="150" alt="">
            <h5 class="font-weight-bold text-dark mb-0">Sarah Williams</h5>
            <p class="text-muted">Content Manager</p>
        </div>

        <!-- Member 3 -->
        <div class="col-md-3 text-center">
            <img src="https://randomuser.me/api/portraits/men/55.jpg"
                 class="rounded-circle shadow mb-3"
                 width="150" alt="">
            <h5 class="font-weight-bold text-dark mb-0">Michael Lee</h5>
            <p class="text-muted">Lead Developer</p>
        </div>

        <!-- Member 4 -->
        <div class="col-md-3 text-center">
            <img src="https://randomuser.me/api/portraits/women/65.jpg"
                 class="rounded-circle shadow mb-3"
                 width="150" alt="">
            <h5 class="font-weight-bold text-dark mb-0">Ava Johnson</h5>
            <p class="text-muted">Community Manager</p>
        </div>

    </div>
</div>


<!-- TESTIMONIAL SECTION   style="background: linear-gradient(105deg, #0b033c 10%, #8960d9 90%);"-->
<div class="container-fluid py-5 " style="background: #f4f4f4;">>

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="font-weight-bold text-warning">What Readers Say</h2>
            <p class="text-dark">Voices from our global community</p>
        </div>

        <div class="row">

            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-4">
                <div class="border rounded p-4 bg-white shadow-sm">
                    <p class="text-dark mb-3">"FreeBook has changed how I find study material! Highly recommended."</p>
                    <h6 class="text-warning font-weight-bold mb-0">- Amit Sharma</h6>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-4">
                <div class="border rounded p-4 bg-white shadow-sm">
                    <p class="text-dark mb-3">"I love exploring new books every week. Amazing platform!"</p>
                    <h6 class="text-warning font-weight-bold mb-0">- Priya Desai</h6>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-4">
                <div class="border rounded p-4 bg-white shadow-sm">
                    <p class="text-dark mb-3">"Great UI, great books, and completely free. Couldn’t ask for more!"</p>
                    <h6 class="text-warning font-weight-bold mb-0">- Rahul Kumar</h6>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection