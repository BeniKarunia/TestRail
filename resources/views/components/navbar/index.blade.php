@push('css')
    <style>
        a {
            font-size: 10px;
            font-weight: 700
        }

        .superNav {
            font-size: 13px;
        }

        .form-control {
            outline: none !important;
            box-shadow: none !important;
        }

        @media screen and (max-width:540px) {
            .centerOnMobile {
                text-align: center
            }
        }
    </style>
@endpush

<div class="superNav border-bottom py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                <span class="me-3 "><i class="" style="color:#ED2939;"></i>
                    <strong></strong></span>
                <span class="me-3 "><i class="" style="color:#ED2939;"></i>
                    <strong></strong></span>
            </div>
            <div
                class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                <span class="me-3"><i class="fa fa-shopping-cart me-1" href="{{ route('cart') }}"
                        style="color:red"></i><a class="text-muted text-decoration-none"
                        href="{{ route('cart') }}">Cart</a></span>

                <template x-data x-if="$store.app.isLogin">
                    <span class="me-3"><i class="fa fa-user me-1" style="color:red"></i><a
                            class="text-muted text-decoration-none" href="{{ route('profile') }}">Profile</a></span>
                </template>

                <template x-data x-if="!$store.app.isLogin">
                    <span class="me-3"><i class="fa fa-user me-1" style="color:red"></i><a
                            class="text-muted text-decoration-none" href="{{ route('login') }}">Login</a></span>
                </template>

            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container flex-wrap">
        <a class="navbar-brand " href="{{ route('home') }}">
            <img src="{{ asset('assets/images/Brand1.jpeg') }}" alt="Logo" width="200%" height="200%"
                class=" ">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
            <form action="{{ route('search-product') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search by product name"
                        style="color:#7a7a7a; border-color: #005C78" required>
                    <button type="submit" class="btn text-white" style="background-color: #ED2939">Search</button>
                </div>
            </form>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}"><small>Home</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('products') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('products') }}"><small>All
                            Products</small></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle {{ request()->is('all-collection', 'collection-one') ? 'active' : '' }} "
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <small>Jewelry Collection</small>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('all-collection') ? 'active' : '' }}"
                                href="{{ route('all-collection') }}">All Collection</a>
                        </li>
                        <li><a class="dropdown-item {{ request()->is('collection-one') ? 'active' : '' }}"
                                href="{{ route('collection-one') }}">Jago One</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}"><small>About Us</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}"><small>Contact Us</small></a>
                </li>
                <div class="ms-4 d-none d-lg-block">
                    <form action="{{ route('search-product') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="search"
                                placeholder="Search by product name" style="color:#7a7a7a; border-color: #005C78"
                                required>
                            <button type="submit" class="btn text-white"
                                style="background-color: #ED2939">Search</button>
                        </div>
                    </form>
                </div>
            </ul>

        </div>
    </div>
</nav>
