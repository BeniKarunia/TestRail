@extends('layout.app')

@section('title', 'JagoJewerly')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper mySwiper rounded">
                    <div class="swiper-wrapper rounded">
                        <div class="swiper-slide">
                            <img src="https://plus.unsplash.com/premium_photo-1708958142067-f52023835f55?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://plus.unsplash.com/premium_photo-1681276170683-706111cf496e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://plus.unsplash.com/premium_photo-1678834778658-9862d9987dd3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="row py-5 g-5">
            <div class="col-md-8 pt-5">
                <div class="d-flex flex-column ">
                    <div class="row g-2" data-aos="fade-right">
                        <div class="col-md-3 col-6">
                            <div class="d-flex ">
                                <img src="https://th.bing.com/th?id=OIP.kf0-7iH7ySVHdaHjvGsuDAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                                    alt="" style="height: 50px; width: 50px;">
                                <div class="d-flex flex-column">
                                    <h5>Shipping</h5>
                                    <h6 class="text-muted">Shipping Worldwide With No Excuse</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="d-flex ">
                                <img src="https://th.bing.com/th?id=OIP.kf0-7iH7ySVHdaHjvGsuDAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                                    alt="" style="height: 50px; width: 50px;">
                                <div class="d-flex flex-column">
                                    <h5>Collection</h5>
                                    <h6 class="text-muted">Always Creating Product You Need</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="d-flex">
                                <img src="https://th.bing.com/th?id=OIP.kf0-7iH7ySVHdaHjvGsuDAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                                    alt="" style="height: 50px; width: 50px;">
                                <div class="d-flex flex-column">
                                    <h5>Price</h5>
                                    <h6 class="text-muted">Best Price For Your Satisfaction </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6">
                            <div class="d-flex">
                                <img src="https://th.bing.com/th?id=OIP.kf0-7iH7ySVHdaHjvGsuDAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                                    alt="" style="height: 50px; width: 50px;">
                                <div class="d-flex flex-column">
                                    <h5>Quality</h5>
                                    <h6 class="text-muted">Focus On Quality Rather Than Quantity</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="img-fluid mt-5 rounded-4 " style="height: 450px; width: auto;"
                        data- ="fade-up">
                </div>
                <div>
                </div>
            </div>
            <div class="col-md-4 h-100" data-aos="fade-left">
                <div class="categories bg-white p-5 shadow-lg rounded-4">
                    <div class="row g-4">
                        <h4>Categories</h4>
                        <!-- <div class="d-flex justify-content-start align-items-center g-4">
                            <div class="btn btn-outline-secondary me-1 w-full  px-4">Wanita</div>
                            <div class="btn btn-outline-secondary me-1 w-full  px-4">Pria</div>
                        </div> -->
                        <div class="content-categories">
                            <div class="row g-2">
                                <div class="bracelet d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconBracelet.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Bracelet</h6>
                                </div>
                                <div class="necklace d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconNecklace.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Necklace</h6>
                                </div>
                                <div class="ring d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconRing.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Ring</h6>
                                </div>
                                <div class="pendant d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconPendant.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Pendant</h6>
                                </div>
                                <div class="earring d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconEarring.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Earring</h6>
                                </div>
                                <div class="piercing d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconPiercing.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Piercing</h6>
                                </div>
                                <div class="crowns d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconCrown.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Crowns</h6>
                                </div>
                                <div class="crowns d-flex align-items-center">
                                    <img src="{{ asset('assets/images/Icons/iconCufflinks.png') }}"
                                        alt="" style="height: 50px; width: 50px;">
                                    <h6 class="text-muted ms-3">Cufflink</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row py-5">
            <div class="col-md-12">
                <h2>Just In</h2>
                <h5>Our Latest Collection and New Products</h5>
            </div>
        </div>
        <div class="col-md-12 pb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="swiper myJustSwiper rounded">
                <div class="swiper-wrapper mb-lg-4 rounded">
                    <div class="swiper-slide rounded">
                        <img src="https://images.unsplash.com/photo-1650453943832-dc4d8e26acd5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fG5lY2tsZXNzfGVufDB8fDB8fHww"
                            alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide rounded">
                        <img src="https://images.unsplash.com/photo-1631982645875-8bd1db34b1a1?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide rounded">
                        <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide rounded">
                        <img src="https://images.unsplash.com/photo-1631982690223-8aa4be0a2497?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="img-fluid rounded">
                    </div>
                    <div class="swiper-slide rounded">
                        <img src="https://images.unsplash.com/photo-1635767798638-3e25273a8236?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="swiper-pagination pt-5"></div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row g-4">
                <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://plus.unsplash.com/premium_photo-1708958142067-f52023835f55?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="rounded-circle" width="40">
                                
                        </div>
                        <div class="user-content">

                            <h5 class="mb-0">Bruce Hardy</h5>
                            <p>Software Developer</p>
                            <small class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</small>
                        </div>

                        <div class="ratings mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://plus.unsplash.com/premium_photo-1708958142067-f52023835f55?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="rounded-circle" width="40">

                        </div>

                        <div class="user-content">
                            <h5 class="mb-0">Mark Smith</h5>
                            <p>Web Developer</p>
                            <small class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</small>
                        </div>

                        <div class="ratings mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image">
                            <img src="https://plus.unsplash.com/premium_photo-1708958142067-f52023835f55?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="rounded-circle" width="40">
                        </div>
                        <div class="user-content ">
                            <h5 class="mb-0">Veera Duncan</h5>
                            <p>Software Architect</p>
                            <small class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</small>
                        </div>

                        <div class="ratings mt-4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

@push('scripts')
    <script>
        const swiper = new Swiper(".mySwiper", {
            cssMode: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });


        const swiper2 = new Swiper(".myJustSwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            // freeMode: true,
            rewind: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // media
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    </script>
@endpush
