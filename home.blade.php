@extends('layouts.app')

@section('content')
<section class="bg-interactive position-relative hero d-flex align-items-center" id="home">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="background-grid"></div>

      <!-- LEFT TEXT CONTENT -->
      <div class="col-lg-6 text-white text-md-start text-center" data-aos="fade-right">
        <span class="badge rounded-pill bg-purple mb-3" data-aos="fade-down" data-aos-delay="100">Ready to Innovate</span>

        <h1 class="display-4 fw-bold mb-2" data-aos="fade-up" data-aos-delay="300">
          Web Junior <span class="text-gradient">Developer</span>
        </h1>

        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="500">
          Creating an Innovative, Functional, and User-Friendly Website for Digital Solutions.
        </p>

        <div class="d-flex flex-wrap gap-3 justify-content-md-start justify-content-center mb-4" data-aos="fade-up" data-aos-delay="700">
          <!-- Custom Purple Button -->
          <a href="#projects" class="credits-button">
   <span class="credits-button-fold"></span>
  <div class="credits-button-points-wrapper">
    <i class="credits-button-point"></i><i class="credits-button-point"></i>
    <i class="credits-button-point"></i><i class="credits-button-point"></i>
    <i class="credits-button-point"></i><i class="credits-button-point"></i>
    <i class="credits-button-point"></i><i class="credits-button-point"></i>
    <i class="credits-button-point"></i><i class="credits-button-point"></i>
  </div>
  <span class="credits-button-inner">
    <svg class="credits-button-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
      <polyline points="13.18 1.37 13.18 9.64 21.45 9.64 10.82 22.63 10.82 14.36 2.55 14.36 13.18 1.37"></polyline>
    </svg>
    Project
  </span>
</a>

          <!-- Kontak -->
          <a href="#contact" class="btn btn-outline-light btn-lg">Kontak <i class="bi bi-chat-dots ms-1"></i></a>
        </div>

        <div class="d-flex gap-3 justify-content-md-start justify-content-center" data-aos="fade-up" data-aos-delay="900">
          <a href="https://github.com/raiderspr516-prog" class="btn btn-glass"><i class="bi bi-github me-2"></i> GitHub</a>
          <a href="https://www.instagram.com/mufan_16?igsh=emxtbnRxbnRmbWh5" class="btn btn-glass"><i class="bi bi-instagram me-2"></i> Instagram</a>
          <a href="https://wa.me/62882003927090" class="btn btn-glass"><i class="bi bi-whatsapp me-2"></i> WhatsApp</a>
        </div>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="1000">
        <img src="/images/animasi.png" alt="Laptop Hero" class="img-fluid hero-img">
      </div>

    </div>
  </div>
</section>


{{-- about --}}
<section id="about" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-purple" data-aos="fade-up">About Me</h2>
        <p class="text-white" data-aos="fade-up" data-aos-delay="100">Turning ideas into digital experiences</p>
    </div>

    <div class="row align-items-center" data-aos="fade-right" data-aos-delay="200">
      <!-- LEFT IMAGE -->
      <div class="col-lg-5 text-center mb-4 mb-lg-0">
        <img src="/images/nyeni.jpg" alt="Foto Profil" class="img-fluid tilt-img rounded shadow-lg" id="draggable-about" style="max-height: 400px; height: auto; cursor: grab;">
      </div>

      <!-- RIGHT TEXT -->
      <div class="col-lg-7 text-white">
        <h3 class="fw-bold mb-3">Halo, saya <span class="text-gradient">Muh.Fauzan.Fathurahman</span></h3>
        <p class="text-white">
          Saya adalah siswa SMA kelas 11 yang antusias dalam dunia teknologi, khususnya pengembangan web. Saya suka mencoba hal-hal baru, mengeksplorasi solusi digital, dan mencari cara bagaimana teknologi bisa memberikan dampak positif di kehidupan sehari-hari.
        </p>
        <p class="text-white">
          Saat ini, saya terus belajar dan mengembangkan diri di bidang web development dan dunia digital secara lebih luas.
        </p>

        <blockquote class="blockquote text-white bg-glass p-3 rounded mb-4">
          “Utilizing AI as a professional tool, not a replacement.”
        </blockquote>

        <div class="d-flex gap-3 flex-wrap">
          <a href="/cv.pdf" class="btn btn-purple btn-lg" download>Unduh CV</a>
          <a href="#projects" class="btn btn-outline-light btn-lg">Lihat Proyek</a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- project --}}
<section id="projects" class="py-5">
  <div class="container">

    <!-- Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-gradient" data-aos="fade-up">Portfolio Showcase</h2>
      <p class="text-white" data-aos="fade-up" data-aos-delay="100">This is the digital footprint of my journey.</p>
    </div>

    <!-- Tabs (Dummy) -->
    <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap"data-aos="fade-up" data-aos-delay="200">
      <button class="btn btn-tab active"><i class="bi bi-window me-1"></i> Proyek</button>
      <button class="btn btn-tab"><i class="bi bi-mortarboard me-1"></i> Edukasi</button>
      <button class="btn btn-tab"><i class="bi bi-cpu me-1"></i> Tech Stack</button>
    </div>

    <!-- Tech Stack -->
<div id="tech-tab" class="row g-4" style="display: none;" data-aos="fade-up" data-aos-delay="200">
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/html.svg" alt="HTML" width="40">
      <p class="mt-2 mb-0">HTML</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/wordpress.svg" alt="CSS" width="40">
      <p class="mt-2 mb-0">Wordpress</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/667.svg" alt="JavaScript" width="40">
      <p class="mt-2 mb-0">JavaScript</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/tailwindcss.svg" alt="Tailwind CSS" width="40">
      <p class="mt-2 mb-0">Tailwind CSS</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/bootstrap.svg" alt="Bootstrap" width="40">
      <p class="mt-2 mb-0">Bootstrap</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/photoshop.svg" alt="PHP" width="40">
      <p class="mt-2 mb-0">Photoshop</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/laravel.svg" alt="Firebase" width="40">
      <p class="mt-2 mb-0">Laravel</p>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="p-4 rounded bg-dark text-white text-center">
      <img src="/icons/inkscape.svg" alt="Vercel" width="40">
      <p class="mt-2 mb-0">Insckape</p>
    </div>
  </div>
</div>

    <!-- Tab EDUKASI -->
<div id="edu-tab" class="row g-4" style="display: none;" data-aos="fade-up" data-aos-delay="200">

  <!-- Perguruan Tinggi -->
  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="bg-dark p-4 rounded-4 shadow border-purple text-white h-100">
      <h5><i class="bi bi-mortarboard-fill me-2 text-purple"></i> Perguruan Tinggi</h5>
      <p class="text-white mb-2">Universitas Merangin - Program Studi Sistem Informasi</p>
      <span class="badge bg-purple">2022 – Sekarang</span>
    </div>
  </div>

  <!-- SMA -->
  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="bg-dark p-4 rounded-4 shadow border-purple text-white h-100">
      <h5><i class="bi bi-mortarboard-fill me-2 text-purple"></i> Sekolah Menengah Atas</h5>
      <p class="text-white mb-2">SMA HUBBUL KHOIR</p>
      <span class="badge bg-purple">2025 – Sekarang</span>
    </div>
  </div>

  <!-- SMP -->
  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="bg-dark p-4 rounded-4 shadow border-purple text-white h-100">
      <h5><i class="bi bi-mortarboard-fill me-2 text-purple"></i> Sekolah Menengah Pertama</h5>
      <p class="text-white mb-2">SMP DARUL FALAH</p>
      <span class="badge bg-purple">2020 – 2023</span>
    </div>
  </div>

  <!-- SD -->
  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
    <div class="bg-dark p-4 rounded-4 shadow border-purple text-white h-100">
      <h5><i class="bi bi-mortarboard-fill me-2 text-purple"></i> Sekolah Dasar</h5>
      <p class="text-white mb-2">MIM BULAKAN SUKOHARJO</p>
      <span class="badge bg-purple">2014 – 2020</span>
    </div>
  </div>

</div>
    <!-- Cards -->
    <!-- Tab PROYEK -->
    <div id="project-tab" class="row g-4" data-aos="fade-up" data-aos-delay="200">
    <div class="row g-4">

      <!-- CARD 1 -->
      <div class="col-md-4">
        <div class="card bg-dark text-white h-100 shadow-sm border-purple">
          <img src="/images/SMAZone.png" class="card-img-top" alt="Proyek 1">
          <div class="card-body">
            <h5 class="card-title text-purple">Website PPDB & Informasi MTs</h5>
            <p class="card-text text-white">Di SMAZone, pengguna dapat membuat dan membaca artikel edukatif, bertukar pikiran melalui forum diskusi, berkomentar, serta mengikuti kuis atau polling yang menarik...</p>
            <a href="https://raiderspr516-prog.github.io/website-Fathur/" class="btn btn-gradient w-100 mb-2" target="_blank">Kunjungi <i class="bi bi-box-arrow-up-right ms-1"></i></a>
            <a href="{{ url('/projects/SMAZone') }}" class="btn btn-outline-light w-100">Detail <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-md-4">
        <div class="card bg-dark text-white h-100 shadow-sm border-purple">
          <img src="/images/sempol.png" class="card-img-top" alt="QR Absensi">
          <div class="card-body">
            <h5 class="card-title text-purple">My QR Absensi</h5>
            <p class="card-text text-white">Mockup ini menampilkan desain papan nama toko modern yang dipasang secara horizontal di bagian depan bangunan...</p>
            <button class="btn btn-secondary w-100 mb-2" disabled>Demo Tidak Tersedia</button>
            <a href="{{ url('/projects/sempol') }}" class="btn btn-outline-light w-100">Detail <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-md-4">
        <div class="card bg-dark text-white h-100 shadow-sm border-purple">
          <img src="/images/laptop.png" class="card-img-top" alt="AI API">
          <div class="card-body">
            <h5 class="card-title text-purple">Integrasi API AI</h5>
            <p class="card-text text-white">FAFATH Home adalah website landing page modern yang dirancang untuk mempromosikan sebuah penginapan murah di kota Solo. Dengan desain yang bersih, elegan, dan responsif...</p>
            <a href="#" class="btn btn-gradient w-100 mb-2" target="_blank">Kunjungi <i class="bi bi-box-arrow-up-right ms-1"></i></a>
            <a href="{{ url('/projects/FAFATH') }}" class="btn btn-outline-light w-100">Detail <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5" id="contact" data-aos="fade-up" data-aos-delay="200">
  <div class="container">
    <h2 class="text-center text-gradient fw-bold mb-2">Contact Me</h2>
    <p class="text-center text-white mb-5">Silakan tinggalkan komentar di bawah ini 👇</p>

    <div class="row g-4">
      <!-- FORM -->
      <div class="col-md-6">
        <div class="bg-dark p-4 rounded-4 shadow text-white">
          <h5 class="fw-bold mb-4">Tulis Komentar</h5>
          <form>
            <div class="mb-3">
              <label class="form-label text-muted">Nama</label>
              <input type="text" class="form-control bg-black border-secondary text-white" placeholder="👤 Nama Anda">
            </div>
            <div class="mb-3">
              <label class="form-label text-muted">Foto Profil (opsional)</label>
              <input type="file" class="form-control bg-black border-secondary text-white">
            </div>
            <div class="mb-3">
              <label class="form-label text-muted">Komentar</label>
              <textarea rows="4" class="form-control bg-black border-secondary text-white" placeholder="Tulis komentar..."></textarea>
            </div>
            <button type="button" class="btn w-100 text-white fw-bold" style="background: linear-gradient(to right, #7f5af0, #8b5cf6); border: none;">
              <i class="bi bi-send-fill me-1"></i> Kirim Komentar
            </button>
          </form>
        </div>
      </div>

      <!-- DAFTAR KOMENTAR -->
      <div class="col-md-6"  data-aos="fade-up" data-aos-delay="200">
        <div class="bg-dark p-4 rounded-4 shadow text-white">
          <h5 class="fw-bold mb-4">Komentar Terbaru</h5>
          <div style="max-height: 400px; overflow-y: auto;" class="pe-2">

            <!-- Komentar 1 -->
            <div class="mb-4 border-bottom pb-3">
              <div class="d-flex align-items-center mb-2">
                <img src="https://i.pravatar.cc/40?img=3" class="rounded-circle me-3" width="40" height="40">
                <div>
                  <strong class="text-light">Fathur</strong><br>
                  <small class="text-muted">1 jam yang lalu</small>
                </div>
              </div>
              <p class="mb-0 text-light">Website kamu keren banget! Keep it up 🔥</p>
            </div>

            <!-- Komentar 2 -->
            <div class="mb-4 border-bottom pb-3">
              <div class="d-flex align-items-center mb-2">
                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                  A
                </div>
                <div>
                  <strong class="text-light">Aulia</strong><br>
                  <small class="text-muted">Kemarin</small>
                </div>
              </div>
              <p class="mb-0 text-light">Suka banget sama desain futuristiknya!</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Info Section -->
<section class="container py-5" data-aos="fade-up" data-aos-delay="400">
  <div class="row bg-dark p-4 rounded-4 position-relative">
    <!-- Connect with Me -->
    <div class="col-md-6 pe-md-5">
      <h5 class="text-white fw-semibold mb-4"><span class="text-primary">|</span> Connect with Me</h5>
      <div class="row gy-3">
        <div class="col-6">
          <div class="d-flex align-items-center bg-white rounded-3 p-3 text-purple">
            <i class="fab fa-instagram fs-4 me-3 text-danger"></i>
            <div>
              <small class="fw-bold">Instagram</small><br>
              <small class="text-muted">@mufan_16</small>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center bg-white rounded-3 p-3 text-purple">
            <i class="fab fa-youtube fs-4 me-3 text-danger"></i>
            <div>
              <small class="fw-bold">Youtube</small><br>
              <small class="text-muted">X-16-M Fauzan </small>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center bg-white rounded-3 p-3 text-purple">
            <i class="fab fa-github fs-4 me-3"></i>
            <div>
              <small class="fw-bold">GitHub</small><br>
              <small class="text-muted">Fathur-prog</small>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex align-items-center bg-white rounded-3 p-3 text-purple">
            <i class="fab fa-tiktok fs-4 me-3 text-white"></i>
            <div>
              <small class="fw-bold">Tiktok</small><br>
              <small class="text-muted">mufan.GH</small>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="d-flex align-items-center bg-white rounded-3 p-3 text-purple">
            <i class="fab fa-whatsapp fs-4 me-3 text-success"></i>
            <div>
              <small class="fw-bold">Whatsapp</small><br>
              <small class="text-muted">0882003927090</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Vertical Divider -->
    <div class="d-none d-md-block position-absolute top-0 bottom-0 start-50 translate-middle-x" style="width: 1px; background-color: rgba(255, 255, 255, 0.1);"></div>

    <!-- Contact Info -->
    <div class="col-md-6 ps-md-5 mt-4 mt-md-0">
      <h5 class="text-white fw-semibold mb-4">Contact</h5>
      <p class="text-light mb-4">Ada yang ingin didiskusikan? Kirim saya pesan dan mari kita bicara.</p>
      <div class="d-flex align-items-center text-white mb-3">
        <i class="fas fa-map-marker-alt me-3 text-primary"></i> KLATEN,Jawa Tengah,  Indonesia
      </div>
      <div class="d-flex align-items-center text-white mb-4">
        <i class="fas fa-globe me-3 text-primary"></i> https://lynk.id/fath_shop
      </div>
      <a href="https://wa.me/62882003927090" target="_blank" class="btn btn-primary d-inline-flex align-items-center">
        <i class="fab fa-whatsapp me-2"></i> Whatsapp Saya
      </a>
    </div>
  </div>
</section>


@endsection
