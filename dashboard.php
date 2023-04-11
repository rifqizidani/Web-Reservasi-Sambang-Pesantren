<?php
session_start();
if (!isset($_SESSION['login'])) header('Location: index.php');

include_once('layouts/header.php');
include_once('functions/get.php');

$reservations = getReservasi();
$history = getHistory();
?>

<!-- Reservasi Kosong -->
<div class="row">
  <?php if ($reservations->num_rows < 1) : ?>
  <div class="reservasi-kosong col-lg-6 text-center mb-5">
    <img src="assets/img/reservation.jpg" alt="Calendar" class="illustration" />
    <h2 class="fs-4 fw-bold my-4">Tidak ada Reservasi</h2>
    <p class="fs-6 fw-normal mb-4">Anda belum melakukan reservasi.</p>
  </div>

  <?php else: ?>

  <!-- List Reservasi -->
  <div class="list-reservasi col-lg-6 text-center mb-5">
    <h2 class="fs-4 fw-bold my-4">Reservasi</h2>
    <table class="table table-hover">
      <thead class="table-success">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Waktu</th>
          <th scope="col">Hapus</th>
        </tr>
      </thead>
      <tbody>
        <?php  while ($row = mysqli_fetch_assoc($reservations)) : ?>
          <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['jam'] ?></td>
            <td>
              <a href="functions/delete.php?id=<?= $row['id'] ?>" class="badge rounded-pill text-bg-danger">
                <i class="hapus bi bi-trash fs-6 text-white"></i>
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <?php endif; ?>

  <!-- Menu -->
  <div class="menus col-lg-6 rounded pt-4">
    <div class="row justify-content-between">
      <div class="menu menu-reservasi col-lg-6 px-2 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <i class="bi bi-calendar-event fs-3 text-success"></i>
            <h5 class="card-title fw-bold text-success mt-3">Reservasi</h5>
            <p class="card-text text-dark">Daftar reservasi kunjungan.</p>
          </div>
        </div>
      </div>
      <div class="menu menu-riwayat col-lg-6 px-2 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <i class="bi bi-clock-history fs-3 text-success"></i>
            <h5 class="card-title fw-bold text-success mt-3">Riwayat</h5>
            <p class="card-text text-dark">Lihat riwayat kunjungan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Form Reservasi -->
  <div class="reservasi d-none col-lg-6">
    <h2 class="fs-4 fw-bold text-center mt-3 mb-4">Formulir Reservasi Kunjungan</h2>
    <form action="functions/save.php" method="post">
      <input type="hidden" name="user_id" value="<?= $_SESSION['login']['id'] ?>">
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" />
        <label for="nama">Nama Santri</label>
      </div>
      <div class="form-floating mb-4">
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" />
        <label for="tanggal">Tanggal Kunjungan</label>
      </div>
      <div class="d-flex flex-wrap">
        <div class="form-check px-2 mb-2">
          <input class="form-check-input" type="radio" name="jam" value="08:00 s.d. 10:00" id="pagi" />
          <label class="form-check-label shadow-sm" for="pagi"> 08:00 s.d. 10:00</label>
        </div>
        <div class="form-check px-2 mb-2">
          <input class="form-check-input" type="radio" name="jam" value="11:00 s.d. 13:00" id="siang" />
          <label class="form-check-label shadow-sm" for="siang"> 11:00 s.d. 13:00</label>
        </div>
        <div class="form-check px-2 mb-2">
          <input class="form-check-input" type="radio" name="jam" value="14:00 s.d. 16:00" id="sore" />
          <label class="form-check-label shadow-sm" for="sore"> 14:00 s.d. 16:00</label>
        </div>
      </div>
      <div class="d-flex justify-content-end mt-4">
        <button type="button" class="batal-reservasi btn btn-danger me-2">Batalkan</button>
        <button class="btn-reservasi btn btn-success">Reservasi</button>
      </div>
    </form>
  </div>

  <!-- Reservasi Berhasil -->
  <div class="berhasil-reservasi col-lg-6 text-center mb-5 d-none">
    <img src="assets/img/complete.jpg" alt="Complete" class="illustration" />
    <h2 class="fs-4 fw-bold my-4">Reservasi Berhasil</h2>
    <p class="fs-6 fw-normal mb-4">Berhasil melakukan reservasi.</p>
    <button class="tutup btn btn-danger">Tutup</button>
  </div>

  <!-- Riwayat Reservasi -->
  <div class="riwayat-reservasi col-lg-6 text-center mb-5 d-none">
    <h2 class="fs-4 fw-bold my-4">Riwayat Kunjungan</h2>
    <div class="d-flex justify-content-start mb-3">
      <button class="tutup-riwayat btn btn-danger">Tutup</button>
    </div>
    <table class="table table-hover">
      <thead class="table-success">
        <tr>
          <th scope="col">Tanggal</th>
          <th scope="col">Waktu</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($history)) : ?>
          <tr>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['jam'] ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include_once('layouts/footer.php') ?>
