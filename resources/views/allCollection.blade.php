@extends('layout.app')

@section('title', 'JagoJewerly')

@section('content')
    <div class="container" x-data="allCollectionPage">
        <div class="animate__animated animate__fadeIn text-center">
            <h2>All Collection</h2>
        </div>
        <div class="row mt-5 animate__animated animate__fadeInUp" x-ref="all-collection-section">
            <div class="col-md-12">
                <div class="row g-4">
                    <template x-for="data in paginatedDatas()">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="p-2">
                                    <img alt="..." :src="data.image" class="card-img">
                                </div>
                                <div class="card-body">
                                    <h3 class="h4" x-text="data.name"></h3>
                                    <p class="mt-4 mb-6 text-justify" x-text="data.description">

                                    </p>
                                    <a href="{{ route('collection-one') }}" class="btn btn-sm bg-primary text-white">
                                        Learn more
                                    </a>
                                </div>
                            </div>
                        </div>
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

@endsection

@push('scripts')
    <script class="text/javasript">
        document.addEventListener('alpine:init', () => {
            Alpine.data('allCollectionPage', () => ({
                init() {
                    this.datas = this.initDatas();
                },
                datas: [],
                currentPage: 1,
                perPage: 6,

                //dummy data
                initDatas: () => {
                    const tempDatas = @json($collections);
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
                        this.$refs['all-collection-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage++;
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.$refs['all-collection-section'].scrollIntoView({
                            behavior: 'smooth'
                        });
                        this.currentPage--;
                    }
                },
                directNumberPage(page) {
                    this.$refs['all-collection-section'].scrollIntoView({
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
                }
            }));
        });
    </script>
@endpush
