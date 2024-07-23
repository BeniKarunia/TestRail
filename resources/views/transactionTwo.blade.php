@extends('layout.app')

@section('title', 'JagoJewerly')

@push('css')
    <style>
        .order-section,
        .shipment-section,
        .total-payment-section {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-item,
        .shipment-info,
        .total-payment-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;

        }

        .order-item img,
        .shipment-info img {
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
        }

        .order-item-details,
        .shipment-details,
        .payment-details {
            flex-grow: 1;
            margin-left: 20px;
        }

        .order-item-total,
        .total-payment {
            text-align: right;
        }

        .btn-place-order {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn-place-order:hover {
            background-color: #0056b3;
        }

        .progress-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .progress-step {
            text-align: center;
            width: 25%;
            position: relative;
        }

        .progress-step::before {
            content: '';
            width: 100%;
            height: 4px;
            background: #e0e0e0;
            position: absolute;
            top: 20px;
            left: 50%;
            z-index: 0;
            transform: translateX(-50%);
            z-index: -1;
        }

        .progress-step.active::before,
        .progress-step.complete::before {
            background: #ed2939;
        }

        .progress-step span {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            background: #e0e0e0;
            color: #fff;
            z-index: 1;
            position: relative;
        }

        .progress-step.active span,
        .progress-step.complete span {
            background: #ed2939;
        }

        /* Overlay style */
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Black background with transparency */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            display: none
                /* Ensure overlay is above other elements */
        }

        /* Circle container */
        #circle {
            width: 150px;
            height: 150px;
            position: relative;
        }
    </style>
@endpush

@section('content')
    <div id="overlay">
        <div id="circle">
            <div class="loader">
                <img src="{{ asset('assets/images/logo-remove-bg.png') }}" alt="Logo Loader"
                    class="animate__animated animate__pulse animate__infinite">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="progress-container">
            <div class="progress-step complete">
                <span>1</span>
                <p>Select Product</p>
            </div>
            <div class="progress-step complete">
                <span>2</span>
                <p>Personal Information</p>
            </div>
            <div class="progress-step active">
                <span>3</span>
                <p>Review Order</p>
            </div>
            <div class="progress-step">
                <span>4</span>
                <p>Checkout Order</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto animate__animated animate__fadeInLeft">
                <h2>Review Your Order</h2>

                <!-- Your Order Section -->
                <div class="order-section mt-5">
                    <h3>Your Order</h3>
                    <div class="order-item mt-5">
                        <img src="{{ asset('assets/images/Ring.jpg') }}" alt="Product Image" class="rounded">
                        <div class="order-item-details">
                            <p>Nama Produk</p>
                            <p>Qty: 1</p>
                            <p>Colour: Red</p>
                            <p>Size: M</p>
                        </div>
                        <div class="order-item-total text-black">
                            <p>Total Harga Produk: Rp. 200,000,00</p>
                        </div>
                    </div>
                    <div class="order-item">
                        <img src="{{ asset('assets/images/Ring.jpg') }}" alt="Product Image" class="rounded">
                        <div class="order-item-details">
                            <p>Nama Produk</p>
                            <p>Qty: 2</p>
                            <p>Colour: Blue</p>
                            <p>Size: L</p>
                        </div>
                        <div class="order-item-total text-black">
                            <p>Total Harga Produk: Rp. 400,000,00</p>
                        </div>
                    </div>
                </div>

                <!-- Your Shipment Section -->
                <div class="shipment-section">
                    <h3>Your Shipment Summary</h3>
                    <div class="shipment-info mt-4">
                        <div class="shipment-details">
                            <p><strong>Shipment Destination:</strong></p>
                            <p>John Doe</p>
                            <p>123 Main St</p>
                            <p>City, State, 12345</p>
                        </div>
                        <div class="shipment-details">
                            <p><strong>Shipment Chosen:</strong></p>
                            <p>JNE - Regular</p>
                            <p><strong>Payment Chosen:</strong></p>
                            <p>Bank Transfer & Virtual Account - BCA</p>
                        </div>
                    </div>
                </div>

                <!-- Your Payment Section -->
                <div class="total-payment-section">
                    <h3>Total Payment</h3>
                    <div class="total-payment-info mt-4">
                        <div class="payment-details">
                            <p>Subtotal Product:</p>
                            <p>Shipment Cost:</p>
                            <p>Insurance Cost:</p>
                        </div>
                        <div class="payment-details">
                            <p>Rp. 600,000,00</p>
                            <p>Rp. 40,000,00</p>
                            <p>Rp. 20,000,00</p>
                        </div>
                    </div>
                    <div class="total-payment">
                        <h4>Total: Rp. 660,000,00</h4>
                    </div>
                </div>

                <div class="d-flex justify-content-center animate__animated animate__pulse animate__infinite">
                    <button id="btn-placed-order" class="btn btn-primary btn-lg btn-block">Place Order</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const btnPlacedOrder = document.getElementById('btn-placed-order');

        btnPlacedOrder.addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'flex';
            setTimeout(() => {
                window.location.href = '{{ route('home') }}';
            }, 3000);
        });
    </script>
@endpush
