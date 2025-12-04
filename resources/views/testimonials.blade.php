@extends('layouts.app')

@section('content')

<!-- ================================
     HERO SECTION
================================ -->
<section class="py-5 bg-light text-center border-bottom">
    <div class="container">
        <h1 class="display-4 font-weight-bold">What Our Readers Say</h1>
        <p class="lead mt-3 text-muted">
            Real stories from people who enjoy reading with BookNest every day.
        </p>
    </div>
</section>


<!-- ================================
     TESTIMONIAL SLIDER
================================ -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 font-weight-bold">Top Testimonials</h2>

        <div class="owl-carousel testimonial-carousel">

            <div class="card shadow-lg border-0 p-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         class="rounded-circle mr-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0 font-weight-bold">Aarav Sharma</h5>
                        <small class="text-muted">Book Enthusiast</small>
                    </div>
                </div>
                <p class="text-muted">
                    “An amazing website! I found rare novels and academic books here that I couldn't get anywhere else.”
                </p>
                <div class="text-warning">★★★★★</div>
            </div>

            <div class="card shadow-lg border-0 p-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" 
                         class="rounded-circle mr-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0 font-weight-bold">Maria Gomez</h5>
                        <small class="text-muted">Verified Reader</small>
                    </div>
                </div>
                <p class="text-muted">
                    “Super easy to download books. The interface is clean and fast. Definitely recommended!”
                </p>
                <div class="text-warning">★★★★★</div>
            </div>

            <div class="card shadow-lg border-0 p-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://randomuser.me/api/portraits/men/14.jpg" 
                         class="rounded-circle mr-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0 font-weight-bold">John Mitchell</h5>
                        <small class="text-muted">Student</small>
                    </div>
                </div>
                <p class="text-muted">
                    “Love the huge library of educational PDFs. Helped me prepare for exams easily.”
                </p>
                <div class="text-warning">★★★★★</div>
            </div>

        </div>
    </div>
</section>



<!-- ================================
     TESTIMONIAL GRID
================================ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 font-weight-bold">More Customer Reviews</h2>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">
                        “Great website! Found classic novels I had been searching for.”
                    </p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/60?img=44" class="rounded-circle mr-3" width="50" height="50">
                        <div>
                            <h6 class="font-weight-bold mb-0">Priya Patel</h6>
                            <small class="text-muted">Regular Reader</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">
                        “Fast download speed and modern interface. Really love it!”
                    </p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/60?img=55" class="rounded-circle mr-3" width="50" height="50">
                        <div>
                            <h6 class="font-weight-bold mb-0">Rahul Verma</h6>
                            <small class="text-muted">Verified User</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted">
                        “Best free PDF library online. The collection keeps growing!”
                    </p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/60?img=66" class="rounded-circle mr-3" width="50" height="50">
                        <div>
                            <h6 class="font-weight-bold mb-0">Emma Wilson</h6>
                            <small class="text-muted">Book Reviewer</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ================================
     CTA SECTION
================================ -->
<section class="py-5 text-white" style="background: #0066cc;">
    <div class="container text-center">
        <h2 class="font-weight-bold">Join Thousands of Happy Readers</h2>
        <p class="mt-3">Access unlimited books, download PDFs, and explore thousands of titles.</p>

        <a href="{{ route('guest') }}" class="btn btn-warning px-4 py-2 mt-3">
            Get Started Free
        </a>
    </div>
</section>


<!-- ================================
     FAQ SECTION
================================ -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 font-weight-bold">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq1">
                        Is downloading books free?
                    </button>
                </div>
                <div id="faq1" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes! All books on BookNest are completely free to download.
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2">
                        Do I need an account?
                    </button>
                </div>
                <div id="faq2" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        No account needed! But creating one gives extra benefits.
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3 border-0">
                <div class="card-header bg-white">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3">
                        Are new books added regularly?
                    </button>
                </div>
                <div id="faq3" class="collapse" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes, new books are added every week!
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
