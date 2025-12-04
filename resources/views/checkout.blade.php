@extends('layouts.app')

@section('content')

<!-- =============================
     HERO / STEPS SECTION
============================== -->
<section class="py-5 text-center" style="background: #ffeaa7;">
    <div class="container">
        <h1 class="display-4 fw-bold">Checkout</h1>
        <p class="lead mt-3 text-dark">
            Complete your order and enjoy your favorite books.
        </p>

        <!-- Steps -->
        <div class="d-flex justify-content-center mt-4 flex-wrap">
            <div class="step px-4 py-2 text-center bg-white rounded shadow me-2 mb-2">
                <i class="fas fa-shopping-cart fa-lg text-primary mb-1"></i>
                <div class="small">Cart</div>
            </div>
            <div class="step px-4 py-2 text-center bg-primary text-white rounded shadow me-2 mb-2">
                <i class="fas fa-user fa-lg mb-1"></i>
                <div class="small">Billing</div>
            </div>
            <div class="step px-4 py-2 text-center bg-white rounded shadow mb-2">
                <i class="fas fa-check fa-lg text-primary mb-1"></i>
                <div class="small">Confirmation</div>
            </div>
        </div>
    </div>
</section>

<!-- =============================
     CHECKOUT FORM SECTION
============================== -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row g-4">

            <!-- Billing & Shipping Form -->
            <div class="col-lg-7">
                <div class="card shadow-sm border-0 p-4 rounded-4">
                    <h3 class="fw-bold mb-4"><i class="fas fa-user me-2 text-primary"></i>Billing & Shipping</h3>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="+1 234 567 890" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Street, City, ZIP" required>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" placeholder="City" required>
                            </div>
                            <div class="col-md-6">
                                <label for="zip" class="form-label">ZIP / Postal Code</label>
                                <input type="text" class="form-control" id="zip" placeholder="12345" required>
                            </div>
                        </div>

                        <div class="mt-3 mb-4">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required>
                                <option selected disabled>Select Country</option>
                                <option>United States</option>
                                <option>India</option>
                                <option>United Kingdom</option>
                                <option>Canada</option>
                                <option>Australia</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="notes" class="form-label">Order Notes</label>
                            <textarea class="form-control" id="notes" rows="3" placeholder="Add special instructions..."></textarea>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 p-4 rounded-4">

                    <h3 class="fw-bold mb-4"><i class="fas fa-receipt me-2 text-primary"></i>Order Summary</h3>

                    <ul class="list-group mb-4 rounded-3 shadow-sm">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/60" class="rounded me-2" alt="Book 1">
                                <div>
                                    <div>Book Title 1</div>
                                    <small class="text-muted">Qty: 1</small>
                                </div>
                            </div>
                            <span>$15.00</span>
                        </li>

                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/60" class="rounded me-2" alt="Book 2">
                                <div>
                                    <div>Book Title 2</div>
                                    <small class="text-muted">Qty: 2</small>
                                </div>
                            </div>
                            <span>$40.00</span>
                        </li>

                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/60" class="rounded me-2" alt="Book 3">
                                <div>
                                    <div>Book Title 3</div>
                                    <small class="text-muted">Qty: 1</small>
                                </div>
                            </div>
                            <span>$12.00</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            Subtotal <span>$67.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            Shipping <span>Free</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between fw-bold">
                            Total <span>$67.00</span>
                        </li>
                    </ul>

                    <!-- Promo Code -->
                    <div class="mb-3">
                        <label for="promo" class="form-label">Promo Code</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="promo" placeholder="Enter code">
                            <button class="btn btn-outline-primary" type="button">Apply</button>
                        </div>
                    </div>

                    <!-- Delivery Options -->
                    <div class="mb-3">
                        <h5 class="fw-bold mb-2"><i class="fas fa-shipping-fast me-2 text-primary"></i>Delivery Options</h5>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="delivery" id="standard" checked>
                            <label class="form-check-label" for="standard">Standard Delivery (3-5 days)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="delivery" id="express">
                            <label class="form-check-label" for="express">Express Delivery (1-2 days)</label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-3">
                        <h5 class="fw-bold mb-2"><i class="fas fa-credit-card me-2 text-primary"></i>Payment Method</h5>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment" id="paypal" checked>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment" id="credit">
                            <label class="form-check-label" for="credit">Credit / Debit Card</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment" id="cod">
                            <label class="form-check-label" for="cod">Cash on Delivery</label>
                        </div>
                    </div>

                    <!-- Place Order Button -->
                    <button class="btn btn-primary btn-lg w-100 mt-3 shadow-sm">
                        Place Order <i class="fas fa-arrow-right ms-2"></i>
                    </button>

                    <!-- Secure Checkout & Support -->
                    <div class="text-center mt-4">
                        <small class="text-muted d-block mb-1">Secure Checkout Guaranteed</small>
                        <small class="text-muted">Need help? <a href="{{ route('contact') }}">Contact Support</a></small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
