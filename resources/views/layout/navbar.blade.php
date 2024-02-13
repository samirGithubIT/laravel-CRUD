<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bolder" href="#">E-<span class="text-success">Bay</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse fs-5 fw-bold" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">User_lists</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <div class="container-fluid py-5">
        @yield('content')
    </div>

    <div class="container-fluid">
        <footer class="bg-dark">
            <h2 class="fs-4 text-center text-warning pt-5"> for more information </h2>
            <h3 class="text-center fs-5 text-warning py-3">contact us <br> phone number : 1234566 </h3>
        </footer>
    </div>
</body>
</html>