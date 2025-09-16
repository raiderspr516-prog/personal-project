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
        <small class="text-white">Portfolio / Personal Project Logo Mock Up</small>
        <h2 class="fw-bold text-light mt-2 mb-3">personal project - Sempol</h2>
        <p class="text-light">
          Mockup ini menampilkan desain papan nama toko modern yang dipasang secara horizontal di bagian depan bangunan. Branding bisnis menggunakan nama yang unik dan catchy, yaitu "Sempol Sempil Sempal", dengan inisial kreatif S³ (dibaca: S-kuadrat-tiga atau S-cube), menegaskan identitas merek yang simple tapi kuat.
        </p>

        <div class="d-flex gap-3 mt-4">
          <div class="glass-card text-center p-3 px-4">
            <i class="bi bi-tools fs-3 text-purple mb-2"></i>
            <small class="text-white">2 Total Teknologi</small>
          </div>
          <div class="glass-card text-center p-3 px-4">
            <i class="bi bi-stars fs-3 text-purple mb-2"></i>
            <small class="text-white">4 Kegunaan MockUp</small>
          </div>
        </div>

        <a href="https://contoh.com" target="_blank" class="btn btn-purple mt-4">
          Live Demo <i class="bi bi-box-arrow-up-right ms-1"></i>
        </a>
      </div>

      <!-- GAMBAR MOCKUP -->
      <div class="col-md-6 text-center mt-5 mt-md-0">
        <img src="/images/sempol.png" class="img-fluid rounded-4 shadow" alt="Tampilan Proyek">
      </div>
    </div>

     <!-- Technologies Used -->
<div class="mt-4">
  <h5 class="text-white mb-3">Technologies Used</h5>
  <div class="d-flex flex-wrap gap-2">
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-brands fa-Inkscape me-1"></i> Inkscape
    </span>
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-solid fa-Photoshop me-1"></i> PhotoShop
    </span>
    <span class="badge bg-purple px-3 py-2 rounded-pill">
      <i class="fa-brands fa-photopea-alt me-1"></i> Photopea
    </span>
  </div>
</div>


    <!-- FITUR UTAMA -->
    <div class="glass-card p-4">
      <h5 class="text-warning mb-3"><i class="bi bi-stars me-2"></i>Key Features</h5>
      <ul class="mb-0 text-light">
        <li>Untuk preview papan nama sebelum dicetak & dipasang</li>
        <li>Presentasi konsep branding usaha (UMKM / street food)</li>
        <li>Portofolio desainer grafis atau UI/UX</li>
        <li>Visual demo di proposal bisnis atau media promosi</li>
      </ul>
    </div>
  </div>
</section>
@endsection
