@extends('layouts.app')

@section('content')

<!-- =============================
    HERO SECTION
============================== -->
<section class="py-5 text-center" style="background: #fff7d6;">
    <div class="container">
        <h1 class="display-4 fw-bold">Return Policy</h1>
        <p class="lead mt-3 text-dark">
            Understand how you can return or exchange books easily and quickly.
        </p>
    </div>
</section>

<!-- =============================
     RETURN POLICY OVERVIEW
============================== -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Commitment to Easy Returns</h2>
            <p class="text-muted">We make returning books as simple as possible.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <i class="fas fa-sync-alt fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Simple Process</h5>
                    <p class="text-muted">Initiate returns easily through your account or by contacting support.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Secure Handling</h5>
                    <p class="text-muted">All returned books are handled carefully to ensure they are inspected and processed securely.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Refunds & Exchanges</h5>
                    <p class="text-muted">Get quick refunds or exchanges for eligible books in accordance with our policy.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
     ELIGIBILITY SECTION
============================== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Return Eligibility</h2>
            <p class="text-muted">To make sure your return is accepted, please follow these guidelines.</p>
        </div>

        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><strong>Timeframe:</strong> Returns must be requested within 14 days of delivery.</li>
            <li class="list-group-item"><strong>Condition:</strong> Books must be in their original condition, with no damage or markings.</li>
            <li class="list-group-item"><strong>Receipt:</strong> Keep your order confirmation or invoice handy for verification.</li>
        </ul>

        <div class="text-center">
            <img src="https://img.freepik.com/free-vector/return-policy-concept-illustration_114360-1320.jpg" class="img-fluid rounded shadow-sm" alt="Return Policy">
        </div>
    </div>
</section>

<!-- =============================
     RETURN STEPS
============================== -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How to Return a Book</h2>
            <p class="text-muted">Follow these simple steps to make a return.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">1. Request Return</h5>
                    <p class="text-muted">Login to your account or contact support to request a return.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <i class="fas fa-box fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">2. Package the Book</h5>
                    <p class="text-muted">Pack the book securely using the original packaging if possible.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">3. Ship Back</h5>
                    <p class="text-muted">Use the courier service provided or your preferred shipping method.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <i class="fas fa-smile-beam fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">4. Receive Refund / Exchange</h5>
                    <p class="text-muted">Once received, we process your refund or exchange promptly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
     FAQ SECTION
============================== -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 font-weight-bold">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq1">
                       Can I return a book after 14 days?
                    </button>
                </div>
                <div id="faq1" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        Returns are accepted only within 14 days of delivery. After this period, returns may not be eligible.
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2">
                 What if the book is damaged?

                    </button>
                </div>
                <div id="faq2" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        Contact our support immediately. We will guide you on returning the damaged book and getting a refund or exchange.
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3">
                            Do I need the original packaging?
                    </button>
                </div>
                <div id="faq3" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        While it’s preferable to use original packaging, securely packaging the book is sufficient.
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
        <h2 class="fw-bold text-dark">Need Assistance with a Return?</h2>
        <p class="text-dark mt-3">Contact our support team and we’ll help you with your return or exchange process.</p>
        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg mt-3">Contact Support</a>
    </div>
</section>

@endsection
