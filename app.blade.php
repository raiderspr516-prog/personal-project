<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Clone</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS Animate on Scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0c0c1b;
      color: #fff;
    }
    .hero {
  position: relative;
  height: 100vh;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  padding: 2rem;
  overflow: hidden;
  background: transparent;
}

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.2rem;
      opacity: 0.8;
    }

.project-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 1rem;
  transition: all 0.3s ease;
}
.project-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(255, 255, 255, 0.07);
}    .project-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.project-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
}

  html, body {
  font-family: 'Poppins', sans-serif;
  color: #fff;
  scroll-behavior: smooth;
  position: relative;
  background-color: transparent;
}
  .hero-section {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    padding: 2rem;
  }
  .hero-section h1 {
    font-size: 3rem;
    font-weight: 700;
  }
  .typed-text {
    color: #0dcaf0;
    font-weight: 500;
  }

    .hero {
    position: relative; height: 100vh;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
  }
  .hero-bg {
    position: absolute; top:0; left:0; width:100%; height:100%;
    filter: brightness(0.5);
  }
  .hero-content {
    z-index: 2; text-align: center; color: #fff;
  }
  .hero-content h1 {
    font-size: 3rem;
    font-weight: bold;
  }
  .typed-text {
    color: #0dcaf0;
    font-size: 1.25rem;
    margin-top: 10px;
  }

  .hero {
  background: radial-gradient(ellipse at top left, #1e1e2f, #0c0c1b);
  min-height: 100vh;
  position: relative;
  overflow: hidden;
}

.bg-purple {
  background-color: #7f5af0;
  color: #fff;
}

.text-gradient {
  background: linear-gradient(90deg, #7f5af0, #ff6ec4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

    .credits-button {
  --h-button: 48px;
  --w-button: 102px;
  --round: 8px;
  cursor: pointer;
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  transition: all 0.25s ease;
  background: radial-gradient(65.28% 65.28% at 50% 100%, #a970ff 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, #6a4de6, #6a4de6);
  border-radius: var(--round);
  border: none;
  outline: none;
  padding: 12px 28px;
}
.credits-button::before,
.credits-button::after {
  content: "";
  position: absolute;
  inset: var(--space);
  transition: all 0.5s ease-in-out;
  border-radius: calc(var(--round) - var(--space));
  z-index: 0;
}
.credits-button::before {
  --space: 1px;
  background: linear-gradient(177.95deg, rgba(255, 255, 255, 0.19) 0%, rgba(255, 255, 255, 0) 100%);
}
.credits-button::after {
  --space: 2px;
  background: radial-gradient(65.28% 65.28% at 50% 100%, #a970ff 0%, rgba(255, 255, 255, 0) 100%), linear-gradient(0deg, #6a4de6, #6a4de6);
}
.credits-button:active { transform: scale(0.95); }

.credits-button-fold {
  z-index: 1;
  position: absolute;
  top: 0;
  right: 0;
  height: 1rem;
  width: 1rem;
  display: inline-block;
  transition: all 0.5s ease-in-out;
  background: radial-gradient(100% 75% at 55%, #a970ff 0%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 3px black;
  border-bottom-left-radius: 0.5rem;
  border-top-right-radius: var(--round);
}
.credits-button-fold::after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 150%;
  height: 150%;
  transform: rotate(45deg) translateX(0%) translateY(-18px);
  background-color: #e8e8e8;
  pointer-events: none;
}
.credits-button:hover .credits-button-fold {
  margin-top: -1rem;
  margin-right: -1rem;
}

.credits-button-points-wrapper {
  overflow: hidden;
  width: 100%;
  height: 100%;
  pointer-events: none;
  position: absolute;
  z-index: 1;
}
.credits-button-point {
  bottom: -10px;
  position: absolute;
  animation: credits-floating-points infinite ease-in-out;
  pointer-events: none;
  width: 2px;
  height: 2px;
  background-color: #fff;
  border-radius: 9999px;
}
@keyframes credits-floating-points {
  0% { transform: translateY(0); }
  85% { opacity: 0; }
  100% { transform: translateY(-55px); opacity: 0; }
}
.credits-button-point:nth-child(1) { left: 10%; opacity: 1; animation-duration: 2.35s; animation-delay: 0.2s; }
.credits-button-point:nth-child(2) { left: 30%; opacity: 0.7; animation-duration: 2.5s; animation-delay: 0.5s; }
.credits-button-point:nth-child(3) { left: 25%; opacity: 0.8; animation-duration: 2.2s; animation-delay: 0.1s; }
.credits-button-point:nth-child(4) { left: 44%; opacity: 0.6; animation-duration: 2.05s; }
.credits-button-point:nth-child(5) { left: 50%; opacity: 1; animation-duration: 1.9s; }
.credits-button-point:nth-child(6) { left: 75%; opacity: 0.5; animation-duration: 1.5s; animation-delay: 1.5s; }
.credits-button-point:nth-child(7) { left: 88%; opacity: 0.9; animation-duration: 2.2s; animation-delay: 0.2s; }
.credits-button-point:nth-child(8) { left: 58%; opacity: 0.8; animation-duration: 2.25s; animation-delay: 0.2s; }
.credits-button-point:nth-child(9) { left: 98%; opacity: 0.6; animation-duration: 2.6s; animation-delay: 0.1s; }
.credits-button-point:nth-child(10) { left: 65%; opacity: 1; animation-duration: 2.5s; animation-delay: 0.2s; }

.credits-button-inner {
  z-index: 2;
  gap: 6px;
  position: relative;
  width: 100%;
  color: white;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 500;
  line-height: 1.5;
  transition: color 0.2s ease-in-out;
}
.credits-button-icon {
  width: 18px;
  height: 18px;
  transition: fill 0.1s linear;
}
.credits-button:focus .credits-button-icon {
  fill: white;
}
.credits-button:hover .credits-button-icon {
  fill: transparent;
  animation: credits-dasharray 1s linear forwards, credits-filled 0.1s linear forwards 0.95s;
}
@keyframes credits-dasharray {
  from { stroke-dasharray: 0 0 0 0; }
  to { stroke-dasharray: 68 68 0 0; }
}
@keyframes credits-filled {
  to { fill: white; }
}

.btn-glass {
  background: rgba(255, 255, 255, 0.05);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.1);
  backdrop-filter: blur(8px);
  padding: 0.5rem 1rem;
  border-radius: 10px;
  transition: 0.3s;
}
.btn-glass:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
  color: #fff;
}

.hero-img {
  max-height: 400px;
  animation: float 3s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0); }
}

.text-purple {
  color: #a970ff;
}

.text-gradient {
  background: linear-gradient(90deg, #7f5af0, #ff6ec4);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.blockquote {
  font-size: 0.95rem;
  border-left: 4px solid #7f5af0;
  background: rgba(255, 255, 255, 0.1); /* warna semi transparan */
  backdrop-filter: blur(10px); /* blur isi di belakangnya */
  -webkit-backdrop-filter: blur(10px); /* untuk Safari */
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 1rem; /* opsional: buat sudut membulat */
}

.text-purple {
  color: #a970ff;
}
.border-purple {
  border: 1px solid #7f5af050;
}

.btn-tab {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: #fff;
  padding: 0.5rem 1.2rem;
  border-radius: 10px;
  transition: 0.3s;
}
.btn-tab.active,
.btn-tab:hover {
  background: linear-gradient(to right, #7f5af0, #ff6ec4);
  color: white;
  border: none;
}

/* Scrollbar custom */
::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-thumb {
  background: #7f5af0;
  border-radius: 4px;
}
::-webkit-scrollbar-track {
  background: transparent;
}

.btn-gradient {
  background: linear-gradient(to right, #8e2de2, #4a00e0);
  color: #fff;
  border: none;
}
.btn-gradient:hover {
  background: linear-gradient(to right, #7a30e2, #3b00e0);
  color: #fff;
}

  .middle-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateX(-50%);
    z-index: 1;
  }

  .avatar {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
  }

  .bg-interactive {
    background: radial-gradient(ellipse at center, #0f0f1b 0%, #0a0a13 100%);
    min-height: 100vh;
    overflow-x: hidden;
  }

  .background-grid {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:
      linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
    background-size: 40px 40px;
    z-index: 0;
    pointer-events: none;
  }

  /* Middle separator (kalau mau ditaruh di tiap section) */
  .middle-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background-color: rgba(255, 255, 255, 0.05);
    transform: translateX(-50%);
    z-index: 1;
  }

  .tilt-img {
  transition: transform 2.0s ease-in-out;
  will-change: transform;
  }

  .tilt-img {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  will-change: transform;
  backface-visibility: hidden;
  transform-style: preserve-3d;
  border-radius: 12px;
}

  </style>

  @stack('styles')
</head>
<body>

  <body class="bg-interactive text-light position-relative">
  <div class="background-grid"></div>

  <div class="position-relative" style="z-index: 2;">
    @yield('content')
  </div>


  <!-- JS Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  @stack('scripts')

{{-- navbar --}}
  <nav class="navbar navbar-expand-lg fixed-top" style="background: rgba(0,0,0,0.4);">
  <div class="container">
    <a class="navbar-brand text-white" href="#">NamaBrand</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li><a class="nav-link text-white" href="#home">Home</a></li>
        <li><a class="nav-link text-white" href="#about">About</a></li>
        <li><a class="nav-link text-white" href="#projects">Projects</a></li>
        <li><a class="nav-link text-white" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>


  <!-- JS: GSAP, ScrollTrigger, Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.36/dist/lenis.min.js"></script>

<script>
  // Typed Text
  var typed = new Typed('.typed-text', {
    strings: ["Web Developer", "Creative Coder", "Laravel Enthusiast"],
    typeSpeed: 60,
    backSpeed: 30,
    loop: true
  });

  // GSAP Animation
  gsap.from(".hero-section h1", {
    y: 50,
    opacity: 0,
    duration: 1.2,
    ease: "power4.out"
  });

  gsap.from(".typed-text", {
    y: 50,
    opacity: 0,
    delay: 0.5,
    duration: 1.2,
    ease: "power4.out"
  });

  // Smooth Scroll with Lenis
  const lenis = new Lenis()
  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }
  requestAnimationFrame(raf)
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".btn-tab");
    const project = document.querySelector("#projects .row");
    const edu = document.querySelector("#edu-tab");

    tabs.forEach((btn, index) => {
      btn.addEventListener("click", () => {
        tabs.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        if (btn.textContent.includes("Proyek")) {
          project.style.display = "flex";
          edu.style.display = "none";
        } else if (btn.textContent.includes("Edukasi")) {
          project.style.display = "none";
          edu.style.display = "flex";
        } else {
          project.style.display = "none";
          edu.style.display = "none";
        }
      });
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".btn-tab");
    const projectTab = document.querySelector("#project-tab");
    const eduTab = document.querySelector("#edu-tab");
    const techTab = document.querySelector("#tech-tab");

    tabs.forEach((btn) => {
      btn.addEventListener("click", () => {
        tabs.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        const selected = btn.textContent.trim();

        // Sembunyikan semua dulu
        projectTab.style.display = "none";
        eduTab.style.display = "none";
        techTab.style.display = "none";

        // Tampilkan sesuai tombol
        if (selected.includes("Proyek")) {
          projectTab.style.display = "flex";
        } else if (selected.includes("Edukasi")) {
          eduTab.style.display = "flex";
        } else if (selected.includes("Tech Stack")) {
          techTab.style.display = "flex";
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
<script>
  VanillaTilt.init(document.querySelectorAll(".tilt-img"), {
    max: 25,          // Derajat kemiringan lebih besar
    speed: 1000,      // Gerakan lebih lambat & elegan
    scale: 1.1,       // Zoom in dikit saat hover
    glare: true,      // Aktifkan efek cahaya/glare
    "max-glare": 0.45, // Intensitas glare
    perspective: 1000, // Kedalaman perspektif
    gyroscope: true   // Aktifkan deteksi perangkat mobile
  });
</script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: false,
  });
</script>


</body>
</html>
