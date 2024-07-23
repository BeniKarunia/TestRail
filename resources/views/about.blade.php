@extends('layout.app')

@section('title', 'JagoJewelry - About Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>We Are Jago Jewelry</h2>

                <!-- Carousel for first section -->
                <div class="row mb-4 animate__animated animate__slideInLeft">
                    <div class="col-md-12 mt-4">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper rounded object-fit-cover">
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

                <!-- Second section with text and carousel -->
                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="row g-2">
                            <div class="d-flex justify-content-center ratio ratio-16x9" data-aos="fade-right">
                                <img src="{{ asset('assets/images/Jago2.jpeg') }}" alt="Secondary Image" width="100"
                                    height="100" class="img-fluid d-flex justify-content-center rounded object-fit-cover">
                            </div>
                            <p class="text-black lead text-justify" data-aos="fade-right">
                                Dengan pengalaman lebih dari 35 tahun di bidang retail. Menjadikan kami Jago Jewelry sebagai partner terpercaya dalam membeli perhiasan anda. 
                                Dengan model terbaru dan koleksi yang lengkap, bisa menjadikan referensi utama dalam memilih perhiasan emas.
                                Selain itu, kita menjamin keaslian di setiap produk kami. Dengan berbagai pilihan kadar emas; seperti 750/75% (Emas Tua), 420/40% (Emas Tengah), dan 375/35% (Emas muda). 
                                Maka, kami bisa menghadirkan berbagai macam range produk untuk semua kalangan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2 g-4">
                            <p class="text-black lead text-justify" data-aos="fade-right">
                                Berdiri sejak 1983, kami memulai segalanya lewat retailer konvensional. Seiring waktu berlalu, kami berkembang dan mengekspansi di berbagai daerah sekitar Jawa Tengah. 
                                Setelah 35 tahun melayani dan beroprasi dengan berbekal pengalaman dan kredibiltas, maka kami percaya diri untuk merambah dunia maya. 
                                Demi meningkatkan kualitas dan kemudahan layanan sekaligus melebarkan sayap untuk hal yang lebih baik.
                            </p>
                            <div class="row mt-4 ml-6">
                                <div class="col-md-18">
                                    <div class="d-flex justify-content-right align-items-right ratio ratio-16x9"
                                        data-aos="fade-right">
                                        <img src="{{ asset('assets/images/Jago1.jpeg') }}" alt="Another Image" width="1000"
                                            height="1000" class="img-fluid d-flex justify-content-center rounded object-fit-cover ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 animate__animated animate__slideInRight">
                    <div class="col-md-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper rounded object-fit-cover">
                            <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/background7.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/background8.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/background9.jpg') }}"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
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