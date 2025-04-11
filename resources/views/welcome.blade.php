<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Steam - Toko</title>
  <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.css') }}">
  <style>
    body {
      background-color: #1b2838;
      color: white;
    }
    .game-banner {
      background-color: #2a475e;
      background-size: cover;
      height: 300px;
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
        <h3>Kartu Hadiah Steam</h3>
        <a href="{{ route('login.tampil')}}"><button class="bs-success">Login</button></a>
        <ul class="list-unstyled">
          <li>user</li>
          <li>Admin</li>
          <li>Developer</li>
          <li>Score</li>
          <li>@if(Auth::check())
    <b>Halo {{ Auth::user()->name }}</b>
    @endif</li>
        </ul>
      </div>

      <!-- Content -->
      <div class="col-md-9">
        <h4>Direkomendasikan</h4>
        <div class="card bg-dark text-white mb-4">
          <div class="row g-0">
            <div class="col-md-8 game-banner"></div>
            <div class="col-md-4 p-3">
              <h5>Blood Strike</h5>
              <p><span class="text-success">Direkomendasikan</span> karena kamu memainkan game dengan tag:</p>
              <div>
                <span class="tag">F2P</span>
                <span class="tag">MMO</span>
                <span class="tag">Survival</span>
                <span class="tag">Multiplayer</span>
              </div>
              <p class="mt-2">Gratis untuk Dimainkan</p>
            </div>
          </div>
        </div>
        <button class="btn btn-outline-light">Telusuri Lebih Banyak</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
