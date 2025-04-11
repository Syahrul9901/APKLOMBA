<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="text-center">
        <h2>Registrasi</h2>
        <p>Silahkan isi form registrasi dibawah ini</p>
    </div>
    <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('registrasi.submit') }}" method="post">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Submit registrasi</button>
                            <p>apakah Anda Memiliki Akun? <a href="{{ route('login.tampil')}}">Login Sekarang</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>