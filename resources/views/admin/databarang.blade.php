@extends('layout/app')
@section('content')
<div id="layoutSidenav_content">

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informasi Produk</h1>
        <a type="button" class="btn btn-primary bi bi-pencil-fill" href="{{url('admin/tambahbarang')}}">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gweh as $i)
                    
                <tr>
                   <td>{{$i->id_produk}}</td>
                   <td>{{$i->nama_produk}}</td>
                   <td>{{$i->harga}}</td>
                   <td>{{$i->stok}}</td>
                   <td>
                       <a type="submit" href=""
                       class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                        <a type="submit" href="{{url('hapusbarang'.$i->id_produk)}}"
                       class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</main>
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
@endsection