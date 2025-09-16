@extends('layouts.app')

@section('content')
<section class="py-5 px-4">
  <div class="container">
    <a href="{{ url('/') }}" class="btn btn-outline-light mb-4">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="row align-items-center mb-5">
      <!-- DESKRIPSI PROYEK -->
      <div class="col-md-6">
        <small class="text-white">Portfolio / Personal Project FAFATH</small>
        <h2 class="fw-bold text-light mt-2 mb-3">personal project - FAFATH</h2>
        <p class="text-light">
          FAFATH Home adalah website landing page modern yang dirancang untuk mempromosikan sebuah penginapan murah di kota Solo. Dengan desain yang bersih, elegan, dan responsif, website ini menghadirkan tampilan visual properti yang menarik sekaligus menampilkan informasi penting secara langsung dan jelas.
        </p>

        <div class="d-flex gap-3 mt-4">
          <div class="glass-card text-center p-3 px-4">
            <i class="bi bi-tools fs-3 text-purple mb-2"></i>
            <small class="text-white">3 Total Teknologi</small>
          </div>
          <div class="glass-card text-center p-3 px-4">
            <i class="bi bi-stars fs-3 text-purple mb-2"></i>
            <small class="text-white">5 Fitur Utama</small>
          </div>
        </div>

        <a href="https://contoh.com" target="_blank" class="btn btn-purple mt-4">
          Live Demo <i class="bi bi-box-arrow-up-right ms-1"></i>
        </a>
      </div>

      <!-- GAMBAR MOCKUP -->
      <div class="col-md-6 text-center mt-5 mt-md-0">
        <img src="/images/FAFATH.png" class="img-fluid rounded-4 shadow" alt="Tampilan Proyek">
      </div>
    </div>

     <!-- Technologies Used -->
<div class="mt-4">
  <h5 class="text-white mb-3">Technologies Used</h5>
  <div class="d-flex flex-wrap gap-2">
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-brands fa-php me-1"></i> PHP
    </span>
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-solid fa-database me-1"></i> MySQL
    </span>
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-brands fa-wordpress-alt me-1"></i> wordpress
    </span>
  </div>
</div>

    <!-- FITUR UTAMA -->
    <div class="glass-card p-4">
      <h5 class="text-warning mb-3"><i class="bi bi-stars me-2"></i>Key Features</h5>
      <ul class="mb-0 text-light">
        <li>Halaman Beranda Interaktif</li>
        <li>Informasi Lengkap penginapan</li>
        <li>boking Online</li>
        <li>Cek Status Penginapan</li>
        <li>Manajemen Pengguna Admin</li>
      </ul>
    </div>
  </div>
</section>
@endsection
