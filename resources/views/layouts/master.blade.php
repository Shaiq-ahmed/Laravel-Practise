<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Master Blade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>

            </div>
          </div>
        </div>
      </nav>


      {{-- sidebar --}}
      <div class="row">
        <div class="col col-md-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                  <span class="fs-4">Sidebar</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                      Orders
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                      Products
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-white">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                      Customers
                    </a>
                  </li>
                </ul>
                <hr>
                <div class="dropdown">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
                </div>
              </div>
              </div>

        <div class="col col-md-9">
            <div class="content">
                @yield('content')
                @yield('conditions')
              </div>
        </div>

      </div>



      {{-- footer --}}
      <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
          <span class="text-muted">FOOTER</span>
        </div>
      </footer>




</body>
</html>
