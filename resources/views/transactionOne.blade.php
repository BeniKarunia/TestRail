@extends('layout.app')

@section('title', 'JagoJewerly')

@push('css')
    <style>
        .progress-container {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .progress-step {
            text-align: center;
            width: 50%;
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
    </style>
@endpush

@section('content')

    <div class="container">
        <div class="progress-container">
            <div class="progress-step complete">
                <span>1</span>
                <p>Select Product</p>
            </div>
            <div class="progress-step active">
                <span>2</span>
                <p>Personal Information</p>
            </div>
            <div class="progress-step">
                <span>3</span>
                <p>Review Order</p>
            </div>
            <div class="progress-step">
                <span>4</span>
                <p>Checkout Order</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-8 mx-auto animate__animated animate__fadeInLeft">
                <div class="card">
                    <div class="card-header">
                        <h2>Enter your personal data</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-4">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="username" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">No. Handphone</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="province">Provinsi</label>
                                            <select class="form-select" id="province" name="province">
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="Jawa Timur">Jawa Timur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">Kabupaten / Kota</label>
                                            <select class="form-select" id="city" name="city">
                                                <option value="Bandung">Bandung</option>
                                                <option value="Surabaya">Surabaya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Adress</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>

                                <div class="form-group">
                                    <label for="district">Kecamatan</label>
                                    <select class="form-select" id="district" name="district">
                                        <option value="Kec. Cihampelas">Kec. Cihampelas</option>
                                        <option value="Kec. Sukajadi">Kec. Sukajadi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="zipcode">Kodepos</label>
                                    <input type="text" class="form-select" id="zipcode" name="zipcode">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInRight">
                <div class="row g-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Shipping</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="shipment">Choose Your Shipment</label>
                                <select class="form-select" id="shipment" name="shipment" class="me-3"
                                    class="fa fa-chevron-down">
                                    <option value="Choose">Choose Your Shipment</option>
                                    <option value="JNE">JNE</option>
                                    <option value="TIKI">TIKI</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Choose Your Payment Method</h2>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="form-group">
                                    <label for="payment-method">Bank Transfer & Virtual Account</label>
                                    <select class="form-select" id="payment-method" name="payment-method">
                                        <option value="Choose1">Choose Your Payment</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-method-ewallet">E-Wallet Payment</label>
                                    <select class="form-select" id="payment-method-ewallet"
                                        name="payment-method-ewallet">
                                        <option value="Choose2">Choose Your Payment</option>
                                        <option value="GoPay">GoPay</option>
                                        <option value="OVO">OVO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-method-qris">QRIS Payment</label>
                                    <select class="form-select" id="payment-method-qris" name="payment-method-qris">
                                        <option value="Choose3">Choose Your Payment</option>
                                        <option value="LinkAja">LinkAja</option>
                                        <option value="ShopeePay">ShopeePay</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('transaction-two') }}" class="btn btn-primary mt-4  btn-block w-full">Review
                    Order</a>
            </div>

        </div>
    </div>
@endsection
