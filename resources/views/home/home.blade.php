<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Games</title>
  <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.css') }}">
  <style>
    body {
      background-color: #1b2838;
      color: white;
    }
    .game-banner {
      background-size: cover;
      height: 300px;
      width: 10px;
      border-radius: 5px;
    }
    .sidebar {
      background-color: #2a475e;
      padding: 15px;
      border-radius: 5px;
    }
    .sidebar h6 {
      margin-top: 20px;
    }
    .tag {
      background-color: #66c0f4;
      border-radius: 3px;
      padding: 2px 6px;
      font-size: 12px;
      margin-right: 5px;
    }
  </style>
</head>
<body>

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-md-3 sidebar">
        <h3>Web Gemes</h3>
        @if(Auth::check())
            <b>Halo {{ Auth::user()->name}} ,selamat Datang sebagai {{ Auth::user()->name}}</b>
        @endif
        <ul class="list-unstyled">
        <li><a href="{{ route('home.tampil')}}">Home</a></li><br>
          <li><a href="{{ route('user.tampil')}}">User</a></li><br>
          <li><a href="{{ route('admin.tampil')}}">Admin</a></li><br>
          <li><a href="{{ route('developmen.tampil')}}">Developmen</a></li><br>
          <li><form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger">Logout</button>
          </form></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="col-md-9">
        <h4>Direkomendasikan</h4>
        
        <div class="card bg-dark text-white mb-4">
          <div class="row g-1">
            <div class="col-md-2 game-banner"></div>
            <div class="col-md-4 p-3">
            <div class="card mb-3" data-bs-toggle="collapse" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ ('img/thu.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Game Pertama</h5>
                    <p class="card-text"></p>
                </div>
                </div>  
                  </div>
                </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
