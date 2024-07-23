@extends('layout.app')

@section('title', 'JagoJewerly')

@push('css')
    <style>
        .review-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .review-item:last-child {
            border-bottom: none;
        }

        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .rating .fa-star {
            color: #f39c12;
        }

        .rating .fa-star-o {
            color: #ddd;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="product-detail">
                    <nav aria-label="breadcrumb" class="animate__animated animate__fadeInLeft">
                        <ol class="breadcrumb mt-3">
                            <li class="breadcrumb-item"><a href="{{ route('products') }}">All Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
                        </ol>
                    </nav>

                    <div class="row g-6 mt-1">
                        <div class="col-md-6 g-3 animate__animated animate__fadeInUp">
                            <div class="ratio ratio-16x9 ">
                                <img src="{{ asset('assets/images/Ring2.jpg') }}" class="img-thumbnail rounded"
                                    alt="Product Name">
                            </div>

                            <div class="row mt-3">
                                <div class="col-4">
                                    <img src="{{ asset('assets/images/Ring.jpg') }}" class="img-thumbnail"
                                        alt="Product Thumbnail">
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('assets/images/Ring.jpg') }}" class="img-thumbnail"
                                        alt="Product Thumbnail">
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('assets/images/Ring.jpg') }}" class="img-thumbnail"
                                        alt="Product Thumbnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight">
                            <div class="row g-4">
                                <h1>{{ $product['name'] }}</h1>
                                <h4>Rp. {{ number_format($product['price'], 2, ',', '.') }}</h4>
                                <p class="text-justify">{{ $product['description'] }}</p>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="colour">Colour</label>
                                            <select class="form-select" id="colour">
                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>Green</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="size">Size</label>
                                            <select class="form-select" id="size">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-12 start-content-end">
                                        <div class="form-group ">
                                            <label class="text-black" for="qty">Quantity</label>
                                            <select class="form-select" id="qty">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-6">
                                <a href="{{ route('cart') }}" class="btn bg-primary btn-lg btn-block w-full text-white">Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2 class="mb-4">Product Reviews</h2>

                <div class="review-list">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="review-item d-flex align-items-start gap-2">
                            <img src="https://via.placeholder.com/50" alt="User profile picture" class="profile-img mr-3">
                            <div class="review-content">
                                <h5 class="mb-1">John Doe</h5>
                                <div class="rating mb-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <small class="text-muted">Reviewed on: July 10, 2024</small>
                                <p class="mt-2">This product is amazing! I've been using it for a week now and it has
                                    exceeded
                                    my expectations. Highly recommend!</p>
                            </div>
                        </div>
                    @endfor

                    {{-- <div class="review-item d-flex align-items-start gap-2">
                        <img src="https://via.placeholder.com/50" alt="User profile picture" class="profile-img mr-3">
                        <div class="review-content">
                            <h5 class="mb-1">Jane Smith</h5>
                            <div class="rating mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <small class="text-muted">Reviewed on: July 9, 2024</small>
                            <p class="mt-2">Good product but there are some minor issues that need to be addressed.
                                Overall, I'm satisfied with my purchase.</p>
                        </div>
                    </div> --}}
                    <!-- Add more reviews as needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
