@extends('layout.app')

@section('title', 'JagoJewerly')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showContent('account-details')">Account Details</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showContent('shipping-address')">Shipping Address</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="showContent('my-orders')">My
                        Orders</a>
                    <a href="#" class="list-group-item list-group-item-action"
                        onclick="showContent('shipping')">Shipping</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action" x-data
                        @click="$store.app.logout()">Logout</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="account-details" class="content">
                    <h2>Account Details</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Handphone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" id="birthday">
                        </div>
                    </form>
                </div>
                <div id="shipping-address" class="content" style="display:none;">
                    <h2>Shipping Address</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Provinsi</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Kabupaten / kota</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Kecamatan</label>
                            <input type="text" class="form-control" id="birthday">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Kode Pos</label>
                            <input type="text" class="form-control" id="birthday">
                        </div>
                    </form>
                </div>
                <div id="my-orders" class="content" style="display:none;">
                    <h2>My Orders</h2>
                    <div class="card mb-3">
                        <div class="row g-4">
                            <div class="col-md-8">
                                <div class="table-responsive animate__animated animate__fadeInUp">
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <br>
                                                <td class="align-left g-2">
                                                    <div class="d-flex flex-column flex-md-row">
                                                        <div class="me-0 me-md-3 mb-3 mb-md-0">
                                                            <img src={{ $product['image'] }}
                                                                alt="Product" width="200" height="200"
                                                                class="img-fluid rounded shadow-sm">
                                                        </div>
                                                        <div class="text-md-start flex-grow-1 g-4">
                                                            <h5 class="mb-0"><a href="#"
                                                                    class="text-dark">{{ $product['name'] }}</a></h5>
                                                            <span class="text-muted d-block">Category:
                                                                {{ $product['category'] }}</span>
                                                            <strong>Rp. {{ number_format($product['price'], 2, ',', '.') }}</strong><br>
                                                            <button type="submit" class="btn text-white" style="background-color: #ED2939">Review</button>
                                                            <button type="submit" class="btn text-white" style="background-color: #FFBF00">Buy Again</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <br>
                                    </tbody>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shipping" class="content" style="display:none;">
                    <h2>Your Shipping Status</h2>
                    <div class="card mb-3">
                        <div class="row g-4">
                            <div class="col-md-8">
                                <div class="table-responsive animate__animated animate__fadeInUp">
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <br>
                                                <td class="align-left g-2">
                                                    <div class="d-flex flex-column flex-md-row">
                                                        <div class="me-0 me-md-3 mb-3 ml-2 mb-md-0">
                                                            <img src={{ $product['image'] }}
                                                                alt="Product" width="200" height="200"
                                                                class="img-fluid rounded shadow-sm">
                                                        </div>
                                                        <div class="text-md-start flex-grow-1 g-4">
                                                            <h5 class="mb-0"><a href="#"
                                                                    class="text-dark">{{ $product['name'] }}</a></h5>
                                                            <span class="text-muted d-block">Category:
                                                                {{ $product['category'] }}</span>
                                                            <strong>Rp. {{ number_format($product['price'], 2, ',', '.') }}</strong><br>
                                                            <button type="submit" class="btn text-white" style="background-color: #ED2939">Invoice</button>
                                                            <button type="submit" class="btn text-white" style="background-color: #FFBF00">Track</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <br>
                                    </tbody>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak informasi pengiriman jika diperlukan -->
                </div>
                <div id="logout" class="content" style="display:none;">
                    <h2>Logout</h2>
                    <!-- Tambahkan logika logout di sini -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(contentId) {
            var contents = document.getElementsByClassName('content');
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = 'none';
            }
            document.getElementById(contentId).style.display = 'block';
        }
    </script>
@endsection
