@extends('layout/app')
@section('content')
    <div id="layoutSidenav_content">

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Informasi Petugas</h1>
                <a type="button" class="btn btn-primary bi bi-pencil-fill" href="{{ url('admin/tambahpetugas') }}">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($burnbrain as $i)
                            <tr>

                                <td>{{$i->petugasid}}</td>
                                <td>{{$i->nama_lengkap}}</td>
                                <td>{{$i->alamat}}</td>
                                <td>{{$i->nomor_telepon}}</td>
                                <td>{{$i->username}}</td>
                                <td>{{$i->password}}</td>
                                <td>{{$i->role}}</td>

                                <td>
                                    <a type="submit" href="{{ url('edit/' . $i->petugasid) }}" class="btn btn-secondary"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="{{url('admin/hapus/'.$i->petugasid)}}"><button type="submit" class="btn btn-danger"><i
                                                class="bi bi-trash"></i></button></a>
                                </td>
                            </tr>
                            <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                        @endforeach
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
    </div>
    </div>
@endsection
