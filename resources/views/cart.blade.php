@extends('layouts.app')

@section('content')

<!-- =============================
    HERO SECTION
============================== -->
<section class="py-5 text-center" style="background: #fff7d6;">
    <div class="container">
        <h1 class="display-4 fw-bold">Your Shopping Cart</h1>
        <p class="lead mt-3 text-dark">
            Review your selected books, adjust quantities, and proceed to checkout.
        </p>
    </div>
</section>

<!-- =============================
     CART TABLE SECTION
============================== -->
<section class="py-5">
    <div class="container">

        <div class="table-responsive">
            <table class="table table-bordered align-middle" id="cartTable">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Book</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item 1 -->
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" alt="Book 1" class="img-fluid rounded me-3" width="80">
                            <div>
                                <h6 class="mb-0">Book Title 1</h6>
                                <small class="text-muted">Author 1</small>
                            </div>
                        </td>
                        <td class="price" data-price="15">$15.00</td>
                        <td>
                            <input type="number" class="form-control form-control-sm quantity" value="1" min="1" style="width: 70px;">
                        </td>
                        <td class="total">$15.00</td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                        </td>
                    </tr>

                    <!-- Item 2 -->
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" alt="Book 2" class="img-fluid rounded me-3" width="80">
                            <div>
                                <h6 class="mb-0">Book Title 2</h6>
                                <small class="text-muted">Author 2</small>
                            </div>
                        </td>
                        <td class="price" data-price="20">$20.00</td>
                        <td>
                            <input type="number" class="form-control form-control-sm quantity" value="2" min="1" style="width: 70px;">
                        </td>
                        <td class="total">$40.00</td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                        </td>
                    </tr>

                    <!-- Item 3 -->
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" alt="Book 3" class="img-fluid rounded me-3" width="80">
                            <div>
                                <h6 class="mb-0">Book Title 3</h6>
                                <small class="text-muted">Author 3</small>
                            </div>
                        </td>
                        <td class="price" data-price="12">$12.00</td>
                        <td>
                            <input type="number" class="form-control form-control-sm quantity" value="1" min="1" style="width: 70px;">
                        </td>
                        <td class="total">$12.00</td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="{{ route('guest') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                </a>
            </div>
            <div class="col-md-6 text-end">
                <h5>Subtotal: <strong id="cartSubtotal">$67.00</strong></h5>
                <a href="{{ route('guest') }}" class="btn btn-warning btn-lg mt-2">
                    Proceed to Checkout
                </a>
            </div>
        </div>

    </div>
</section>

<!-- =============================
     SCRIPT TO UPDATE TOTALS
============================== -->
<script>
    function updateCartTotals() {
        let subtotal = 0;
        document.querySelectorAll('#cartTable tbody tr').forEach(row => {
            const price = parseFloat(row.querySelector('.price').dataset.price);
            const quantity = parseInt(row.querySelector('.quantity').value);
            const total = price * quantity;
            row.querySelector('.total').textContent = '$' + total.toFixed(2);
            subtotal += total;
        });
        document.getElementById('cartSubtotal').textContent = '$' + subtotal.toFixed(2);
    }

    // When quantity changes
    document.querySelectorAll('.quantity').forEach(input => {
        input.addEventListener('input', updateCartTotals);
    });

    // When remove button clicked
    document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('tr').remove();
            updateCartTotals();
        });
    });

    // Initialize totals
    updateCartTotals();
</script>

@endsection
