<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leitura em Dia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="Images\logo.png" />
</head>



<body class="bg-dark-subtle">
  
  <div class="container">

    <!-- barra de navegação -->
    <nav class="navbar primary-color fixed-top navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 fw-semibold" href="">
          <img src="Images\logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
          Leitura em Dia
        </a>
        
        <button class="navbar-toggler  align-self-stretch border-0 rounded-0 px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <i class="bi bi-person-circle fs-3"></i>
        </button>

        <div class="offcanvas offcanvas-end secondary-color fw-medium" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          
          <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-3" id="offcanvasNavbarLabel">Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
