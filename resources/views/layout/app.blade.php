<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/images/logo-remove-bg.png') }}" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">

    <style>
        .footer-btn {
            padding: 13px 30px;
            background-color: #ed2939;

            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        .footer-btn:hover {
            border: 1px solid #ed2939;
            background-color: transparent;
            color: #ed2939;
        }
    </style>
    @stack('css')
</head>

<body>
    <header>
        <x-navbar />
    </header>

    <main class="container min-vh-100 my-5  ">
        @yield('content')
    </main>

    <footer class="footer ">
        <x-footer />
    </footer>

    <a href="#" class="btn-scroll-top">
        <i class="fas fa-arrow-up text-black"></i>
    </a>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('app', {
                init() {
                    this.isLogin = this.getLocalStorage() ? this.getLocalStorage() : false;
                },
                isLogin: false,

                setLocalStorage(key, value) {
                    localStorage.setItem(key, value);
                },

                getLocalStorage() {
                    return JSON.parse(localStorage.getItem('isLogin'));
                },

                logout() {
                    this.setLocalStorage('isLogin', false);
                    window.location.href = '{{ route('login') }}';
                },
            })
        })
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script>
        AOS.init();
    </script>

    @stack('scripts')
</body>

</html>
