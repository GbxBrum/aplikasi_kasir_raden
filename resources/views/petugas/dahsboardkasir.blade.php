@extends('layout/appkasir')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Buku</h4>
                                </div>
                                <div class="card-body">
                                    {{-- {{$barang->count()}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                        <div class="card card-statistic-1" id="stokCard">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Stok Kosong</h4>
                                </div>
                                <div class="card-body">
                                    {{-- {{$stok_kosong->count()}} --}}
                                </div>
                                {{-- <a href="stok-kosong" data-toggle="modal" data-target="#stok-kosong">Detail</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4> Total Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    {{-- {{$transaksi->count()}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Transaksi Hari ini</h4>
                                </div>
                                <div class="card-body">
                                    {{-- {{$transaksi_hari_ini->count()}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Informasi</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
                <footer class="py-4 bg-light mt-auto fixed-bottom">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
            
    </main>
@endsection