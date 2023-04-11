$('.btn-masuk').on('click', function () {
  $('.pilihan').removeClass('d-flex')
  $('.pilihan').addClass('d-none')
  $('.form-masuk').removeClass('d-none')
})

$('.btn-daftar').on('click', function () {
  $('.pilihan').removeClass('d-flex')
  $('.pilihan').addClass('d-none')
  $('.form-daftar').removeClass('d-none')
})

$('.link-masuk').on('click', function (e) {
  e.preventDefault()
  $('.form-daftar').addClass('d-none')
  $('.form-masuk').removeClass('d-none')
})

$('.link-daftar').on('click', function (e) {
  e.preventDefault()
  $('.form-masuk').addClass('d-none')
  $('.form-daftar').removeClass('d-none')
})

$('.menu-reservasi').on('click', function () {
  $('.menus').addClass('d-none')
  $('.reservasi').removeClass('d-none')
})

$('.batal-reservasi').on('click', function () {
  $('.reservasi').addClass('d-none')
  $('.menus').removeClass('d-none')
})

$('.btn-reservasi').on('click', function () {
  $('.reservasi').addClass('d-none')
  $('.berhasil-reservasi').removeClass('d-none')
  $('.reservasi-kosong').addClass('d-none')
  $('.list-reservasi').removeClass('d-none')
})

$('.tutup').on('click', function () {
  $('.berhasil-reservasi').addClass('d-none')
  $('.menus').removeClass('d-none')
})

$('.hapus').on('click', function () {
  $('.list-reservasi').addClass('d-none')
  $('.reservasi-kosong').removeClass('d-none')
})

$('.menu-riwayat').on('click', function () {
  $('.menus').addClass('d-none')
  $('.riwayat-reservasi').removeClass('d-none')
})

$('.tutup-riwayat').on('click', function () {
  $('.riwayat-reservasi').addClass('d-none')
  $('.menus').removeClass('d-none')
})
