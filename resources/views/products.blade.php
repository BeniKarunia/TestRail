@extends('layout.app')

@section('title', 'JagoJewelry - All Products')

@push('css')
    <style>
        .vertical-image {
            margin-top: 10px;
        }

        .vertical-image img {
            width: 100%;
            max-width: 100%;
            height: 200%;
        }
    </style>
@endpush

@section('content')
    <div class="container" x-data="productPage">
        <div class="row ">
            <div class="col-md-12" x-ref="product-section">
                <br>
                <div class="animate__animated animate__fadeInLeft">
                    <h2>All Products</h2>
                    <label for="sort" class="form-label mt-4">Sort By</label>
                </div>

                <div class="row g-6 g-lg-4 gap">
                    <!-- Filter Section -->
                    <div class="col-md-3 animate__animated animate__fadeInUp">
                        <div class="mb-4">
                            <select class="form-select shadow shadow-lg " id="sort" x-model="dropDownDefault">
                                <option selected>Default</option>
                                <option value="price">Price</option>
                                <option value="name">Name</option>
                            </select>
                        </div>

                        <div class="accordion shadow shadow-lg" id="filterAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Gender
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <form>
                                            <div class="form-check">
                                                {{-- <input class="form-check-input" name="checkboxGender" type="checkbox"
                                                    value="all" @change="filterGender" id="filterAllGender">
                                                <label class="form-check-label" for="filterAllGender">
                                                    All
                                                </label> --}}
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="checkboxGender" type="checkbox"
                                                    value="woman" @change="filterGender" id="filterWoman">
                                                <label class="form-check-label" for="filterWoman">
                                                    Woman
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="checkboxGender" type="checkbox"
                                                    value="man" id="filterMan" @change="filterGender">
                                                <label class="form-check-label" for="filterMan">
                                                    Man
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Categories
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            {{-- <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="all" @click="filterCategory" id="filterAllCategory">
                                            <label class="form-check-label" for="filterAllCategory">
                                                All
                                            </label> --}}
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Ring" id="filterRing" @click="filterCategory">
                                            <label class="form-check-label" for="filterRing">
                                                Ring
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Necklace" id="filterNecklace" @click="filterCategory">
                                            <label class="form-check-label" for="filterNecklace">
                                                Necklace
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Bracelet" id="filterBracelet" @click="filterCategory">
                                            <label class="form-check-label" for="filterBracelet">
                                                Bracelet
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Earring" id="filterEarring" @click="filterCategory">
                                            <label class="form-check-label" for="filterEarring">
                                                Earring
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Pendant" id="filterPendant" @click="filterCategory">
                                            <label class="form-check-label" for="filterPendant">
                                                Pendant
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Piercing" id="filterPiercing" @click="filterCategory">
                                            <label class="form-check-label" for="filterPiercing">
                                                Piercing
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Crowns" id="filterCrowns" @click="filterCategory">
                                            <label class="form-check-label" for="filterCrowns">
                                                Crowns
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Cufflink" id="filterCufflink" @click="filterCategory">
                                            <label class="form-check-label" for="filterCufflink">
                                                Cufflink
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Weight
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            {{-- <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="all" @click="filterWeight" id="filterAllWeight">
                                            <label class="form-check-label" for="filterAllWeight">
                                                All
                                            </label> --}}
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="0.5" id="filterWeight1" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight1">
                                                0.5g
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="1.0" id="filterWeight2" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight2">
                                                1.0g
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="1.5" id="filterWeight3" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight3">
                                                1.5g
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="2.0" id="filterWeight4" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight4">
                                                2.0g
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="2.5" id="filterWeight5" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight5">
                                                2.5g
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxWeight" type="checkbox"
                                                value="3.0" id="filterWeight16" @click="filterWeight">
                                            <label class="form-check-label" for="filterWeight6">
                                                3.0g
                                            </label>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#filterAccordion">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            {{-- <input class="form-check-input" name="checkboxPrice" type="checkbox"
                                                value="" @click="filterPrice" id="filterAllPrice">
                                            <label class="form-check-label" for="filterAllPrice">
                                                All
                                            </label> --}}
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxGender" type="checkbox"
                                                value="man" id="filterMan" @change="filterGender">
                                            <label class="form-check-label" for="filterMan">
                                                Rp 1.000.000,00 - Rp 1.500.000,00
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxGender" type="checkbox"
                                                value="woman" @change="filterGender" id="filterWoman">
                                            <label class="form-check-label" for="filterWoman">
                                                Rp 1.500.000,00 - Rp 2.000.000,00
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Earring" id="filterEarring" @click="filterCategory">
                                            <label class="form-check-label" for="filterEarring">
                                                Rp 2.000.000,00 - Rp 2.500.000,00
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="checkboxCategory" type="checkbox"
                                                value="Necklace" id="filterNecklace" @click="filterCategory">
                                            <label class="form-check-label" for="filterNecklace">
                                                Rp 2.500.000,00 - Rp 3.000.000,00
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-image rounded">
                            <img src="{{ asset('assets/images/background10.jpg') }}" alt="Vertical Image" class="img-fluid rounded">
                        </div>
                        <div class="vertical-image rounded">
                            <img src="{{ asset('assets/images/background11.jpg') }}" alt="Vertical Image" class="img-fluid rounded">
                        </div>
                        <div class="vertical-image rounded">
                            <img src="{{ asset('assets/images/Jago3.jpeg') }}" alt="Vertical Image" class="img-fluid rounded">
                        </div>
                        <div class="vertical-image rounded">
                            <img src="{{ asset('assets/images/Jago2.jpeg') }}" alt="Vertical Image" class="img-fluid rounded">
                        </div>
                    </div>
                    

                    <!-- Products Section -->
                    <div class="col-md-9 animate__animated animate__fadeInRight">
                        <div class="row">
                            <template x-for="data in paginatedDatas()" :key="data.id">
                                <div class="col-md-4 mb-4">
                                    <a :href="`{{ url('/products') }}/${data.id}`">
                                        <div class="card">
                                            <img x-bind:src="data.image" class="card-img-top" alt="Product Name">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end">
                                                    <span class="badge bg-primary " x-text="data.category"></span>
                                                </div>
                                                <h3 class="card-title text-black" x-text="data.name"></h3>
                                                <p class="card-subtitle font-weight-bold text-black"
                                                    x-text="showPriceFormat(data.price)"></p>
                                                <p class="card-text text-justify mt-4"
                                                    x-text="limitDescription(data.description)"></p>
                                                <div class="d-flex gap-2">
                                                    <p class="card-text mt-4" x-text="'Weight: ' + data.weight + 'g'"></p>
                                                    <p class="card-text mt-4" x-text="'Stock: ' + data.stock"></p>
                                                    {{-- <p class="card-text mt-4" x-text="'Gender: ' + data.gender"></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            </template>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation example" class="my-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <button class="page-link" aria-label="Previous" @click="prevPage()"
                                        :disabled="currentPage == 1">
                                        <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </button>
                                </li>
                                <template x-for="page in visiblePages()" :key="page.id">
                                    <li class="page-item" x-bind:class="{ active: page.text === currentPage }">
                                        <a class="page-link" x-text="page.text"
                                            @click="page.text != '...' ? directNumberPage(page.text) : null"></a>
                                    </li>
                                </template>
                                <li class="page-item">
                                    <button class="page-link" aria-label="Next" @click="nextPage()"
                                        :disabled="currentPage == totalPages()">
                                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('productPage', () => ({
                init() {
                    this.datas = this.initDatas();

                    //onchange dropdownDefault
                    this.$watch('dropDownDefault', (value) => {
                        if (value === 'price') {
                            this.datas = this.datas.sort((a, b) => a.price - b.price);
                        } else {
                            this.datas = this.datas.sort((a, b) => a.name.localeCompare(b
                                .name));
                        }
                    });
                },
                datas: [],
                currentPage: 1,
                perPage: 9,
                dropDownDefault: '',
                selectedFilterGender: [],
                selectedFilterCategory: [],
                selectedFilterWeight: [],
                selectedFilterPrice: [],

                //dummy data
                initDatas: () => {
                    const tempDatas = @json($products);
                    return tempDatas;
                },
                paginatedDatas() {
                    const start = (this.currentPage - 1) * this.perPage;
                    const end = start + this.perPage;

                    return this.datas.slice(start, end);
                },
                totalPages() {
                    return Math.ceil(this.datas.length / this.perPage);
                },
                nextPage() {
                    if (this.currentPage < this.totalPages()) {
                        this.$refs['product-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['product-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['product-section'].scrollIntoView({
                        behavior: 'smooth'
                    });
                    this.currentPage = page;
                },
                visiblePages() {
                    const total = this.totalPages();
                    const current = this.currentPage;

                    let pages = [];

                    if (total <= 1) {
                        for (let i = 1; i <= total; i++) {
                            pages.push({
                                id: i,
                                text: i
                            });
                        }
                    } else {
                        pages.push({
                            id: 1,
                            text: 1
                        });

                        let startPage, endPage;

                        if (total <= 5) {
                            startPage = 2;
                            endPage = total - 1;
                        } else {
                            if (current <= 3) {
                                startPage = 2;
                                endPage = 4;
                            } else if (current >= total - 2) {
                                startPage = total - 3;
                                endPage = total - 1;
                            } else {
                                startPage = current - 1;
                                endPage = current + 1;
                            }
                        }

                        if (startPage > 2) {
                            pages.push({
                                id: 'ellipsis-start',
                                text: '...'
                            });
                        }

                        for (let i = startPage; i <= endPage; i++) {
                            pages.push({
                                id: i,
                                text: i
                            });
                        }

                        if (endPage < total - 1) {
                            pages.push({
                                id: 'ellipsis-end',
                                text: '...'
                            });
                        }

                        pages.push({
                            id: total,
                            text: total
                        });
                    }
                    return pages;
                },

                filterGender(event) {
                    let gender = event.target.value;

                    if (event.target.checked) {
                        this.selectedFilterGender.push(gender);
                    } else {
                        this.selectedFilterGender = this.selectedFilterGender.filter(filter =>
                            filter !== gender);
                    }
                    this.applyFilters();
                },
                filterCategory(event) {
                    let category = event.target.value;
                    if (event.target.checked) {
                        this.selectedFilterCategory.push(category);
                    } else {
                        this.selectedFilterCategory = this.selectedFilterCategory.filter(filter =>
                            filter !== category);
                    }
                    this.applyFilters();
                },
                filterWeight(event) {
                    let weight = event.target.value;
                    if (event.target.checked) {
                        this.selectedFilterWeight.push(weight);
                    } else {
                        this.selectedFilterWeight = this.selectedFilterWeight.filter(filter =>
                            filter !== weight);
                    }
                    this.applyFilters();
                },
                filterPrice(event) {
                    let price = event.target.value;
                    if (event.target.checked) {
                        this.selectedFilterPrice.push(price);
                    } else {
                        this.selectedFilterPrice = this.selectedFilterPrice.filter(filter =>
                            filter !== price);
                    }
                    this.applyFilters();
                },

                applyFilters() {
                    let filteredDatas = this.initDatas();

                    if (this.selectedFilterGender.length > 0) {
                        filteredDatas = filteredDatas.filter(data => this.selectedFilterGender.includes(
                            data.gender));
                    }

                    if (this.selectedFilterCategory.length > 0) {
                        filteredDatas = filteredDatas.filter(data => this.selectedFilterCategory
                            .includes(data.category));
                    }
                    if (this.selectedFilterWeight.length > 0) {
                        filteredDatas = filteredDatas.filter(data => this.selectedFilterWeight
                            .includes(data.weight));
                    }
                    if (this.selectedFilterPrice.length > 0) {
                        filteredDatas = filteredDatas.filter(data => this.selectedFilterPrice
                            .includes(data.price));
                    }

                    this.datas = filteredDatas;
                },

                showPriceFormat(price) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    }).format(price);
                },

                limitDescription(description) {
                    return description.length > 80 ? description.substring(0, 80) + '...' : description;
                }
            }));
        });
    </script>
@endpush
