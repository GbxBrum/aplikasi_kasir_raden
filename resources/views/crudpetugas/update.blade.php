<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .registration-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .registration-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .registration-form {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .registration-btn {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2 class="registration-heading">Registration</h2>
        @foreach ($bug as $i)
                    @endforeach
        <form class="registration-form" action="{{url('edit/'.$i->petugasid)}}" method="POST">
            @csrf 
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{$i->username}}">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="password" value="{{$i->password}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{$i->email}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="nama lengkap" value="{{$i->nama_lengkap}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="nomor telepon" value="{{$i->nomor_telepon}}">
            </div>  
            <div class="form-group">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="{{$i->alamat}}">
            </div>  
            <div class="form-group">
                <label for="role" class="sr-only">Akses</label>
                <div class="position-relative has-icon-right">
                    <select class="form-control input-shadow" name="role" id="role" aria-label="floating label select example">
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block registration-btn">Update</button>
            <a type="submit" href="{{url('admin/listpetugas')}}" class="btn btn-primary btn-block registration-btn">kembali</a>
        </form>
       
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
