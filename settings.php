<?php
session_start();
if (!isset($_SESSION['login'])) header('Location: index.php');

include_once 'layouts/header.php';
?>

<!-- Avatar -->
<div class="row justify-content-center mb-5">
  <figure class="avatar-lg col-sm-4 col-md-2">
    <img src="assets/img/avatar.png" alt="Avatar" class="rounded-circle img-thumbnail" />
    <figcaption class="fs-5 fw-semibold text-center mt-2"><?= $_SESSION['login']['nama'] ?></figcaption>
  </figure>
</div>

<!-- Pengaturan Profil -->
<div class="row justify-content-center mb-5">
  <div class="col-lg-4">
    <h2 class="fs-6 fw-semibold text-center mb-4">Pengaturan Profil</h2>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="nama" placeholder="John Doe" value="<?= $_SESSION['login']['nama'] ?>" />
      <label for="nama">Nama</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="username" placeholder="john" value="<?= $_SESSION['login']['username'] ?>" />
      <label for="username">Username</label>
    </div>
    <div class="d-flex justify-content-end">
      <button class="btn btn-success">Simpan</button>
    </div>
  </div>
</div>

<!-- Ganti Password -->
<div class="row justify-content-center mb-5">
  <div class="col-lg-4">
    <h2 class="fs-6 fw-semibold text-center mb-4">Ganti Password</h2>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="oldpass" placeholder="oldpass" />
      <label for="oldpass">Password Lama</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="newpass" placeholder="newpass" />
      <label for="newpass">Password Baru</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="confpass" placeholder="confpass" />
      <label for="confpass">Konfirmasi Password</label>
    </div>
    <div class="d-flex justify-content-end">
      <button class="btn btn-success">Ganti</button>
    </div>
  </div>
</div>
      
<?php include_once 'layouts/footer.php' ?>
