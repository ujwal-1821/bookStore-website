@extends('layouts.app')

@section('content')

<!-- =============================
    HERO SECTION
============================== -->
<section class="py-5 text-center" style="background: #fff7d6;">
    <div class="container">
        <h1 class="display-4 fw-bold">Shipment Policy</h1>
        <p class="lead mt-3 text-dark">
            Learn how we handle shipping and delivery to ensure your books reach you safely.
        </p>
    </div>
</section>

<!-- =============================
     SHIPPING PROCESS SECTION
============================== -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Shipping Process</h2>
            <p class="text-muted">We take every step to ensure your books are delivered quickly and safely.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-receipt fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Order Confirmation</h5>
                    <p class="text-muted">Once your order is placed, you’ll receive an instant confirmation email.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-box fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Packaging</h5>
                    <p class="text-muted">All books are securely packaged with care to prevent any damage during transit.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Shipping</h5>
                    <p class="text-muted">We partner with reliable couriers to ensure fast delivery worldwide.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-smile-beam fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Delivery</h5>
                    <p class="text-muted">Your order arrives safely at your doorstep, ready to enjoy!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
     PACKAGING DETAILS SECTION
============================== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Packaging Details</h2>
            <p class="text-muted">We take care of every detail to protect your books.</p>
        </div>

        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><strong>Secure Materials:</strong> All books are packed in sturdy boxes with protective padding.</li>
            <li class="list-group-item"><strong>Water-Resistant Packaging:</strong> We use water-resistant materials to protect your books during shipping.</li>
            <li class="list-group-item"><strong>Environmentally Friendly:</strong> We use recyclable and eco-friendly packaging whenever possible.</li>
        </ul>

        <div class="text-center">
            <img src="https://img.freepik.com/free-photo/cardboard-box-package-isolated-white-background_1150-17914.jpg" class="img-fluid rounded shadow-sm" alt="Packaging">
        </div>
    </div>
</section>

<!-- =============================
     INTERNATIONAL SHIPPING
============================== -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">International Shipping</h2>
            <p class="text-muted">We deliver books to readers worldwide.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <p><strong>Delivery Times:</strong> Depending on your country, international shipping can take between 7-21 business days.</p>
                <p><strong>Customs & Duties:</strong> Import duties or taxes may be charged by your country. Buyers are responsible for these fees.</p>
            </div>
            <div class="col-md-6">
                <img src="https://img.freepik.com/free-vector/international-delivery-concept-illustration_114360-108.jpg" class="img-fluid rounded shadow-sm" alt="International Shipping">
            </div>
        </div>
    </div>
</section>

<!-- =============================
     RETURNS & EXCHANGES
============================== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Returns & Exchanges</h2>
            <p class="text-muted">If you encounter any issues with your shipment, we’ve got you covered.</p>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Damaged Books:</strong> Contact support within 7 days to report damaged items.</li>
            <li class="list-group-item"><strong>Lost Packages:</strong> If your package is lost, we will work with the courier to trace it.</li>
            <li class="list-group-item"><strong>Exchange Requests:</strong> Eligible exchanges can be requested within 14 days of delivery.</li>
        </ul>
    </div>
</section>

<!-- =============================
     FREQUENTLY ASKED QUESTIONS
============================== -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 font-weight-bold">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq1">
                           How long will my order take to arrive?
                    </button>
                </div>
                <div id="faq1" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                    Domestic orders typically arrive within 3-7 business days. International shipping varies depending on location.

                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2">
                       Can I track my shipment?
                    </button>
                </div>
                <div id="faq2" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                    Yes! Every order comes with a tracking number. You can track your package on the courier’s website.

                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3">
                   Do you ship internationally?

                    </button>
                </div>
                <div id="faq3" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes, we ship books worldwide using reliable courier partners.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =============================
     CALL TO ACTION
============================== -->
<section class="py-5 text-center" style="background: #f4f4f4;">
    <div class="container">
        <h2 class="fw-bold text-dark">Have Questions About Shipping?</h2>
        <p class="text-dark mt-3">Contact our support team anytime and get help with your order.</p>
        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg mt-3">Contact Support</a>
    </div>
</section>

@endsection
