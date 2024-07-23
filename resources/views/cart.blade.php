@extends('layout.app')

@section('title', 'JagoJewerly - Cart')

@push('css')
    <style>
        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
@endpush

@section('content')

    <div class="container">
        <h2 class="my-4 animate__animated animate__fadeInLeft">Cart</h2>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="px-0 px-lg-0">
                    <div class="pb-5">
                        <div class="container ">
                            <div class="row g-4">
                                <div class="col-md-8 bg-white rounded shadow-sm mb-5 mx-auto">
                                    <div class="table-responsive animate__animated animate__fadeInUp">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="bg-light">
                                                        <div class="p-2 text-uppercase">Product</div>
                                                    </th>
                                                    <th scope="col" class="bg-light">
                                                        <div class="p-2 text-uppercase text-center">Remove</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td class="align-middle g-2">
                                                            <div class="d-flex flex-column flex-md-row">
                                                                <div class="me-0 me-md-3 mb-3 mb-md-0">
                                                                    <img src={{ $product['image'] }}
                                                                        alt="Product" width="150" height="150"
                                                                        class="img-fluid rounded shadow-sm">
                                                                </div>
                                                                <div class="text-md-start flex-grow-1 g-4">
                                                                    <h5 class="mb-0"><a href="#"
                                                                            class="text-dark">{{ $product['name'] }}</a></h5>
                                                                    <span class="text-muted d-block">Category:
                                                                        {{ $product['category'] }}</span>
                                                                    <strong>Rp. {{ number_format($product['price'], 2, ',', '.') }}</strong><br>
                                                                    <div class="d-flex align-items-center mt-2">
                                                                        <button
                                                                            class="btn btn-outline-secondary btn-sm me-2"
                                                                            type="button">-</button>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm text-center"
                                                                            value="3" style="width: 50px;">
                                                                        <button
                                                                            class="btn btn-outline-secondary btn-sm ms-2"
                                                                            type="button">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <a href="#" class="text-danger"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>

                            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                                <div class="col-lg-6">
                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code
                                    </div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">If you have a coupon code, please enter it in the box
                                            below</p>
                                        <div class="input-group mb-4 border rounded-pill p-2">
                                            <input type="text" placeholder="Apply coupon"
                                                aria-describedby="button-addon3" class="form-control border-0">
                                            <div class="input-group-append border-0">
                                                <button id="button-addon3" type="button"
                                                    class="btn bg-primary text-white px-4 rounded animate__animated animate__swing animate__infinite"><i
                                                        class="fa fa-gift mr-4"></i>Apply coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">
                                        Instructions for seller</div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">If you have some information for the seller you can
                                            leave them in the box below</p>
                                        <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order
                                        summary </div>
                                    <div class="p-4">
                                        <p class="font-italic mb-4">Shipping and additional costs are calculated based on
                                            values you have entered.</p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                    class="text-muted">Order Subtotal </strong><strong>$390.00</strong>
                                            </li>
                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                    class="text-muted">Shipping and
                                                    handling</strong><strong>$10.00</strong></li>
                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                    class="text-muted">Tax</strong><strong>$0.00</strong></li>
                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                    class="text-muted">Total</strong>
                                                <h5 class="font-weight-bold">$400.00</h5>
                                            </li>
                                        </ul><a href="{{ route('transaction-one') }}" class="btn btn-primary w-full text-white rounded py-2 btn-block">Procceed
                                            to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
