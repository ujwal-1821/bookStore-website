@extends('layouts.app')

@section('content')

<!-- =============================
    HERO SECTION
============================== -->
<section class="py-5  text-white text-center" style="background: #fff7d6;">
    <div class="container">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead mt-3 text-dark">
            We'd love to hear from you. Our team is always ready to help!
        </p>
    </div>
</section>

<!-- =============================
     CONTACT SECTION
============================== -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">

            <!-- CONTACT INFO -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h4 class="fw-bold mb-4">Get In Touch</h4>

                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Phone</h6>
                            <small class="text-muted">+91 98765 43210</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Email</h6>
                            <small class="text-muted">support@example.com</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-primary text-white rounded-circle p-3 me-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Office</h6>
                            <small class="text-muted">New Delhi, India</small>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FORM -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4">

                    <h4 class="fw-bold mb-4">Send Us a Message</h4>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control form-control-lg bg-light" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

        <!-- MAP -->
        <div class="mt-5">
            <div class="card border-0 shadow-sm overflow-hidden">
                <iframe 
                    src="https://maps.google.com/maps?q=New%20Delhi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%" 
                    height="350" 
                    style="border:0;">
                </iframe>
            </div>
        </div>

    </div>
</section>

@endsection
