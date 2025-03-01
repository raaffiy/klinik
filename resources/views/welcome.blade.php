<?php
// Assuming you have a Product model
use App\Models\Event;
use App\Models\Achievement;

$all_event = Event::all();
$all_achievement = Achievement::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PMR - SMK NEGERI 2 KOTA BEKASI</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="/">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  
      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/SMKN 2.png" alt="SMK NEGERI 2 KOTA BEKASI" class="img-fluid">
        &nbsp;&nbsp;<img src="assets/img/PMI.png" alt="PMR" class="img-fluid">
      </a>
  
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#divisi">Divisi</a></li>
          <li><a href="#achievement">Achievement</a></li>
          <li><a href="#event">Event</a></li>
          <li><a href="#bph">BPH - PMR</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <button class="btn-getstarted btn" href="#" id="btn" style="bor">Get Started</button>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-snow2 me-2"></i>
                PMR SMK NEGERI 2 KOTA BEKASI
              </div>

              <h1 class="mb-4">
                Hargai tubuhmu <br>
                Dengan melaksanakan <br>
                <span class="accent-text">Pola hidup sehat</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Kesehatan mencakup fisik, mental, dan emosional, yang saling terkait. Pola hidup sehat seperti makan bergizi, olahraga,
                istirahat cukup, dan mengelola stres adalah investasi penting untuk hidup berkualitas.
              </p>

              <div class="hero-buttons">
                <button href="#" class="btn btn-primary me-0 me-sm-2 mx-1" id="btn2">Get Started</button>
                <a href="https://youtu.be/rXUVvF69dz0" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/asset1.png" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <p class="mb-0 mt-20">we strong because we're family</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i><img src="assets/img/badge.png" alt="awards" width="40"></i>
              </div>
              <div class="stat-content">
                <h4>17+ Won Awards</h4>
                <p class="mb-0">Semangat Prestasi Juara</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i><img src="assets/img/stretcher.png" alt="tandu darurat" width="40"></i>
              </div>
              <div class="stat-content">
                <h4>Tandu Darurat</h4>
                <p class="mb-0">Cepat Kuat Aman</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i><img src="assets/img/heart.png" alt="Pertolongan Pertama" width="40"></i>
              </div>
              <div class="stat-content">
                <h4 style="font-size: 17px;">Pertolongan Pertama</h4>
                <p class="mb-0">Cepat Tepat Sigap</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i><img src="assets/img/parents.png" alt="Perawatan Keluarga" width="40"></i>
              </div>
              <div class="stat-content">
                <h4 style="font-size: 17px">Perawatan Keluarga</h4>
                <p class="mb-0">Peduli Bantu Lindungi</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <a href="/about" class="about-meta">MORE ABOUT US</a>
            <h2 class="about-title">PMR - SMK NEGERI 2 KOTA BEKASI</h2>
            <p class="about-description">Palang Merah Remaja (PMR) adalah organisasi kepemudaan di bawah Palang Merah Indonesia (PMI) yang berfokus pada
            kemanusiaan, kesehatan, pertolongan pertama, kesiapsiagaan bencana, donor darah, evakuasi darurat, kepedulian sosial,
            dan edukasi kesehatan. 🚑❤️</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Pengecekan Kesehatan</li>
                  <li><i class="bi bi-check-circle-fill"></i> Lomba PMR SE-Kota Bekasi</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Donor Darah</li>
                  <li><i class="bi bi-check-circle-fill"></i> Latihan Gabungan PMR</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="assets/img/pelatih.jpeg" alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name fw-bold" style="font-size: 14px;">Agung Cahyono S.E</h4>
                      <p class="profile-position">Pelatih - PMR</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-3">
                    <i class="bi bi-instagram"></i>
                    <div>
                      <p class="contact-label">Instagram</p>
                      <p class="contact-number"><a href="https://www.instagram.com/pmr2bekasi/">pmr2bekasi</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/gambar 1.jpeg" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="assets/img/divisi.png" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>77 <span>BPH - PMR</span></h3>
                <p>PMR - SMKN 2 KOTA BEKASI</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="divisi" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Divisi</h2>
        <p>Siap menjadi pahlawan kemanusiaan? Temukan informasi, kegiatan, dan pelatihan seru di tiga divisi utama kami!" 🙌🏻</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                <h4>Pertolongan Pertama</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                <h4>Tandu Darurat</h4>
              </a><!-- End tab nav item -->

            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                <h4>Perawatan Keluarga</h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Pertolongan Pertama (PP)</h3>
                <p class="fst-italic">
                  Pertolongan pertama adalah tindakan segera yang diberikan kepada penderita sakit atau korban kecelakaan yang membutuhkan
                  penanganan medis dasar sebelum mendapatkan perawatan lebih lanjut. Divisi ini bertujuan untuk:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Menyelamatkan nyawa penderita.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Mencegah risiko kecacatan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Memberikan rasa aman dan nyaman kepada penderita.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pp.png" style="width: 500px" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Tandu Darurat</h3>
                <p class="fst-italic">
                  Tandu adalah alat yang digunakan untuk mengevakuasi korban dari lokasi kejadian ke tempat yang lebih aman atau fasilitas
                  kesehatan, seperti rumah sakit dan puskesmas. Divisi ini bertujuan untuk:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Memudahkan penolong dalam mengevakuasi korban.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Memberikan kenyamanan dan keamanan bagi korban selama proses evakuasi.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tandu.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Pertolongan Keluarga (PK)</h3>
                <p class="fst-italic">
                  Perawatan yang dilakukan oleh anggota keluarga dengan memanfaatkan alat-alat sederhana yang tersedia, namun tetap
                  inovatif dan efektif, sehingga dapat memberikan kepuasan bagi klien.
                  Tujuan dari pertolongan keluarga ini adalah:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Meringankan beban penderitaan klien.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Menunjang proses atau upaya penyembuhan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Mengurangi risiko penularan penyakit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Memberikan kesempatan bagi bayi dan anak-anak untuk tumbuh sehat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Membiasakan keluarga untuk menjalani pola hidup sehat.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pk.png" style="width: 500px" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Features Section -->
    <section id="achievement" class="features section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Achievement</h2>
        <p>Berbagai prestasi telah diraih oleh PMR dalam bidang Pertolongan Pertama, Tandu, Pertolongan Keluarga</p>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="features-slider position-relative">
          <div class="row px-4 flex-nowrap g-4 overflow-x-auto scroll-behavior-smooth" id="achievement-cards"
            style="scrollbar-width: none; -ms-overflow-style: none; display: flex; flex-wrap: nowrap;">
            @foreach ($all_achievement as $achievement)
              <?php
  $gambar_lomba = Storage::disk('public')->url($achievement->gambar_lomba);
  $nama_lomba = $achievement->nama_lomba;
  $deskripsi_lomba = $achievement->deskripsi_lomba;
  $tingkat_lomba = $achievement->tingkat_lomba;
  $achievementId = $achievement->id;
          ?>

              <div class="col-12 col-md-4 d-inline-block" style="flex: 0 0 auto;">
                <a href="/achievement/{{ $achievementId }}">
                <div class="card h-100">
                  <img src="{{ $gambar_lomba }}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">{{ $nama_lomba }}</h5>
                  <p class="card-text">{!! $deskripsi_lomba !!}</p>
                  </div>
                  <div class="card-footer">
                  <small class="text-muted">{{ $tingkat_lomba }}</small>
                  </div>
                </div>
                </a>
              </div>
      @endforeach
          </div>
          <button class="carousel-control-prev" style="background-color: rgb(113, 159, 166)" type="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" style="background-color: rgb(113, 159, 166)" type="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section><!-- /Features Section -->
    
    <style>
      .features-slider {
        position: relative;
        padding: 0 2.5rem;
      }
    
      #achievement-cards::-webkit-scrollbar {
        display: none;
      }
    
      .carousel-control-prev,
      .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        opacity: 0.8;
        transition: opacity 0.3s;
      }
    
      .carousel-control-prev:hover,
      .carousel-control-next:hover {
        opacity: 1;
      }
    
      .carousel-control-prev {
        left: 1%;
      }
    
      .carousel-control-next {
        right: 1%;
      }
    
      @media (max-width: 768px) {
        .features-slider {
          padding: 0 1.5rem;
        }
      }
    </style>
    
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const cardsContainer = document.getElementById('achievement-cards');
        const prevBtn = document.querySelector('.carousel-control-prev');
        const nextBtn = document.querySelector('.carousel-control-next');

        if (cardsContainer && prevBtn && nextBtn) {
          nextBtn.addEventListener('click', function () {
            cardsContainer.scrollBy({
              left: cardsContainer.clientWidth,
              behavior: 'smooth'
            });
          });

          prevBtn.addEventListener('click', function () {
            cardsContainer.scrollBy({
              left: -cardsContainer.clientWidth,
              behavior: 'smooth'
            });
          });
        }
      });
    </script>

    <!-- Features Section -->
    <section id="event" class="features section">
    
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Event</h2>
        <p>Beragam event yang diselenggarakan oleh PMR dan PMI untuk mendukung aksi kemanusiaan, kesehatan, dan kesiapsiagaan
        darurat.</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach ($all_event as $event)
            <?php
  $gambar_event = Storage::disk('public')->url($event->gambar_event);
  $nama_event = $event->nama_event;
  $deskripsi_event = $event->deskripsi_event;
  $eventId = $event->id;
            ?>

            <div class="col">
            <a href="/event/{{ $eventId }}">
              <div class="card h-100">
              <img src="{{ $gambar_event }}" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">{{ $nama_event }}</h5>
              <p class="card-text">{!! $deskripsi_event !!}</p>
              </div>
              </div>
            </a>
            </div>

      @endforeach
        </div>
    
      </div>
    
    </section><!-- /Features Section -->

    <!-- team Section -->
    <section id="bph" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>BPH - PMR</h2>
        <p>Berikut ini adalah daftar badan pengurus hakim angkatan 15</p>
      </div><!-- End Section Title -->
      
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/7.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/Jsgraws_"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jessica Grace Wilson</h4>
                <span>Ketua Umum</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.tiktok.com/@liechtenstein_"><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Erik Prasstio</h4>
                <span>Wakil Ketua Umum 1</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/5.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/snnsl4"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Naisila Supratman</h4>
                <span>Wakil Ketua Umum 2</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/afdytama_"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dida Afdy Tama</h4>
                <span>Humas</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/4.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/ciasyuu/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Suci Triananda</h4>
                <span>Bendahara Umum 1</span> 
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/2.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/4dellaputri_/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Adella Putri Pratama</h4>
                <span>Bendahara Umum 2</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/6.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/kynda.rz"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rizky Nanda Dzakiyyah</h4>
                <span>Sekretaris Umum 1</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/structure/8.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/tynrnii"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Tiara NurAini</h4>
                <span>Sekretaris Umum 2</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>
      </div>

    </section><!-- /team Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="assets/img/logo.png" alt="logo">
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Lap. Bola Rw. Butun, Ciketing Udik</p>
            <p>Kec. Bantar Gebang, Kota Bks, Jawa Barat 17153</p>
            <p class="mt-3"><strong>Anggota PJBL:</strong></p>
            <ul>
              <li>
                <p><strong>Maulana Ra'afi</strong> <span>RPL K.I (Angk 19)</span></p>
                <p><strong>Irfan Ramadhan Taufik</strong> <span>RPL K.I (Angk 19)</span></p>
                <p><strong>Dimas Alfiansyah Putra</strong> <span>RPL K.I (Angk 19)</span></p>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Profil & Struktur</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#divisi">Divisi</a></li>
            <li><a href="#bph">BPH - PMR</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Kegiatan & Prestasi</h4>
          <ul>
            <li><a href="#achievement">Achievement</a></li>
            <li><a href="#event">Event</a></li>
            <li><a href="/medicine">Medicine</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Informasi & Berita</h4>
          <ul>
            <li><a href="/news">News</a></li>
            <li><a href="/chat">Chat (AI)</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<template id="my-template">
  <swal-button type="confirm" color="#008080" id="news-button">
    News
  </swal-button>
  <swal-button type="cancel" color="#BDB76B" id="medicine-button">
    Medicine
  </swal-button>
  <swal-button type="deny" color="#228B22" id="chat-button">
    Chat (AI)
  </swal-button>
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param name="customClass" value='{ "popup": "my-popup" }' />
  <swal-function-param name="didOpen" value="popup => console.log(popup)" />
</template>
<script>
  const btn = document.getElementById('btn');
  btn.addEventListener('click', function () {
    Swal.fire({
      template: "#my-template"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to News page
        window.location.href = "/news";
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        // Redirect to Medicine page
        window.location.href = "/medicine";
      } else if (result.dismiss === Swal.DismissReason.deny) {
        // Redirect to Chat Bot page
        window.location.href = "/chat";
      }
    });
  });
</script>
<script>
  const btn2 = document.getElementById('btn2');
  btn2.addEventListener('click', function () {
    Swal.fire({
      template: "#my-template"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to News page
        window.location.href = "/news";
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        // Redirect to Medicine page
        window.location.href = "/medicine";
      } else if (result.dismiss === Swal.DismissReason.deny) {
        // Redirect to Chat Bot page
        window.location.href = "/chat";
      }
    });
  });
</script>