<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Reservasi Sambang Pesantren</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          Aplikasi Reservasi Sambang Pesantren
        </a>
        <div class="d-flex flex-wrap ms-auto">
          <div class="dropdown">
            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-list"></i> </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="dashboard.php">
                  <i class="bi bi-house"></i>
                  Beranda
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="settings.php">
                  <i class="bi bi-gear"></i>
                  Pengaturan
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="functions/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  Keluar
                </a>
              </li>
            </ul>
          </div>
          <img src="assets/img/avatar.png" alt="Avatar" class="avatar rounded-circle ms-4" />
        </div>
      </div>
    </nav>

    <div class="container pt-5 my-4">
