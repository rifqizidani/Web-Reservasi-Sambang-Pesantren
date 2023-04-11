<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Reservasi Sambang Pesantren</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      body {
        background: url(assets/img/background.jpg) center no-repeat;
        background-size: cover;
        position: relative;
        min-height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="container relative">
      <div class="hero row d-flex align-items-center">
        <div class="col-md-8 text-center">
          <h1 class="fs-1 fw-bold text-uppercase text-white text-shadow lh-base mb-5">
            Aplikasi Reservasi
            <br />
            Sambang Pesantren
          </h1>
          <p class="fs-4 fw-semibold text-white text-shadow">Pondok Pesantren Qomaruddin</p>
          <p class="fs-4 fw-semibold text-white text-shadow">Sampurnan Bungah Gresik</p>
        </div>

        <div class="col-md-4">
          <div class="pilihan d-flex flex-column">
            <button class="btn-masuk btn btn-success fw-semibold text-uppercase shadow-sm py-3">Masuk</button>
            <p class="fs-6 fw-semibold text-center text-uppercase text-white my-4">Atau</p>
            <button class="btn-daftar btn btn-success fw-semibold text-uppercase shadow-sm py-3">Daftar</button>
          </div>

          <!-- Form Login -->
          <div class="form-masuk d-none">
            <form action="functions/login.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="john" />
                <label for="username">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" />
                <label for="password">Password</label>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn btn-success text-uppercase text-white shadow-sm my-4">Login</button>
              </div>
            </form>
            <p class="fs-6 fw-semibold text-center text-white text-shadow">Belum punya akun? <a href="" class="link-daftar text-success text-decoration-none">Daftar sekarang</a></p>
          </div>

          <!-- Form Daftar -->
          <div class="form-daftar d-none">
            <form action="functions/register.php" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" />
                <label for="nama">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="john" />
                <label for="username">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="password" />
                <label for="password">Password</label>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn btn-success text-uppercase text-white shadow-sm my-4">Daftar</button>
              </div>
            </form>
            <p class="fs-6 fw-semibold text-center text-white text-shadow">Sudah punya akun? <a href="" class="link-masuk text-success text-decoration-none">Login sekarang</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="relative">
      <p class="fs-6 fw-semibold text-center text-white text-shadow">Copyright &copy; 2022 All Rights Reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
