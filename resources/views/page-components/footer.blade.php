<!-- Footer Start -->
<style>
    .footer-gradient {
        background: linear-gradient(105.4deg, #0b033c 4.91%, #8960d9 98.92%);
    }
    .footer-link {
        color: #dcdcdc !important;
        text-decoration: none;
    }
    .footer-link:hover {
        color: #F2C94C !important;
    }
    .footer-title {
        color: #ffffff;
        font-weight: bold;
    }
</style>

<div class="container-fluid footer-gradient text-white mt-5 pt-5">
    <div class="row px-xl-5 pt-5">

        <!-- Logo + About -->
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold text-white">
                    <span class="bg-white text-warning font-weight-bold border border-white px-3 mr-1">FB</span>FreeBook
                </h1>
            </a>

            <p class="text-light">
                Discover timeless stories, insightful reads, and must-have books for every reader.
                Your journey through pages begins here.
            </p>

            <p class="mb-2"><i class="fa fa-map-marker-alt text-warning mr-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-envelope text-warning mr-3"></i>info@example.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-warning mr-3"></i>+012 345 67890</p>
        </div>

        <div class="col-lg-8 col-md-12">
            <div class="row">

                <!-- Navigation -->
                <div class="col-md-4 mb-5">
                    <h5 class="footer-title mb-4">Site Navigation</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="footer-link mb-2" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="footer-link mb-2" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>Browse Books</a>
                        <a class="footer-link mb-2" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>My Cart</a>
                        <a class="footer-link mb-2" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="footer-link mb-2" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="footer-link" href="{{ route('guest') }}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>

                <!-- Help Policies -->
                <div class="col-md-4 mb-5">
                    <h5 class="footer-title mb-4">Help & Policies</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="footer-link mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                        <a class="footer-link mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shipping Information</a>
                        <a class="footer-link mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Return Policy</a>
                        <a class="footer-link mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Conditions</a>
                        <a class="footer-link mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="footer-link" href="#"><i class="fa fa-angle-right mr-2"></i>Customer Support</a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-md-4 mb-5">
                    <h5 class="footer-title mb-4">Newsletter</h5>

                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required">
                        </div>

                        <div>
                            <button class="btn btn-warning btn-block border-0 py-3 text-dark" type="submit">
                                Subscribe Now
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-light">
                &copy; {{ date('Y') }}
                <a class="text-warning font-weight-semi-bold" href="#">FreeBook</a>. All Rights Reserved.
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn bg-warning text-dark back-to-top rounded-circle">
    <i class="fa fa-angle-double-up"></i>
</a>
