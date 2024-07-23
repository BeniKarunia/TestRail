@extends('layout.app')

@section('title', 'JagoJewerly')

@section('content')

    <div class="container">
        <!-- Featured Collection Image -->
        <div class="row mb-4 animate__animated animate__slideInLeft">
            <div class="col-md-12 border ratio ratio-16x9 rounded object-fit-cover">
                <img src="{{ asset('assets/images/Jago3.jpeg') }}" alt="Featured Collection"
                    class=" border rounded object-fit-cover">
            </div>
        </div>

        <!-- Secondary Image, Text, and Another Image Section -->
        <div class="row mb-4 g-4">
            <div class="col-md-6">
                <div class="row g-2">
                    <div class="d-flex justify-content-center ratio ratio-16x9" data-aos="fade-right">
                        <img src="{{ asset('assets/images/earring.jpg') }}" alt="Secondary Image" width="100"
                            height="100" class="img-fluid d-flex justify-content-center rounded object-fit-cover">
                    </div>
                    <p class="text-black lead text-justify" data-aos="fade-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-2">
                    <p class="text-black lead text-justify" data-aos="fade-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center ratio ratio-16x9 "
                                data-aos="fade-left">
                                <img src="{{ asset('assets/images/bracelet2.jpg') }}" alt="Another Image" width="100"
                                    height="100" class="rounded object-fit-cover ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Listings -->
        <div class="row mb-4">
            @php
                $aosDelay = 100;
            @endphp

            @foreach ($products as $product)
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{ $aosDelay }}">
                    <a href="{{ route('product-one', $product['id']) }}">
                        <div class="card">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="Product Name">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <span class="badge bg-primary ">{{ $product['category'] }}</span>
                                </div>
                                <h3 class="card-title text-black">{{ $product['name'] }}</h3>
                                <p class="card-subtitle font-weight-bold text-black">Rp.
                                    {{ number_format($product['price'], 2, ',', '.') }}</p>
                                <p class="card-text text-justify mt-4">
                                    {{ Str::limit(strip_tags($product['description']), 80) }}
                                </p>
                                <div class="d-flex gap-2">
                                    <p class="card-text mt-4">Weight: {{ $product['weight'] }}g</p>
                                    <p class="card-text mt-4">Stock: {{ $product['stock'] }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @php
                    $aosDelay += 100;
                @endphp
            @endforeach
        </div>
    </div>
@endsection
