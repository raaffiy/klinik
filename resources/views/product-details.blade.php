<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Medicine Details - PMR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="service-details-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('assets/img/SMKN 2.png') }}" alt="SMK NEGERI 2 KOTA BEKASI" class="img-fluid">
      &nbsp;&nbsp;<img src="{{ asset('assets/img/PMI.png') }}" alt="PMR" class="img-fluid">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#devisi">Devisi</a></li>
        <li><a href="/#achievement">Achievement</a></li>
        <li><a href="/#event">Event</a></li>
        <li><a href="/#team">Teams</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <button class="btn-getstarted btn" href="#" id="btn" style="bor">Get Started</button>

  </div>
</header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Medicine Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/medicine">Medicine Page</a></li>
            <li class="current">Medicine Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ Storage::disk('public')->url($products->gambar_obat) }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ Storage::disk('public')->url($products->gambar_obat_2) }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Information</h3>
              <ul>
                <li><strong>Nama Obat</strong>: {{ $products->nama_obat }}</li>
                <li><strong>Kategori obat</strong>: {{ $products->kategori_obat }}</li>
                <li>{{ $products->keterangan_obat }}</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Deskripsi obat</h2>
              <p>
                {!! $products->deskripsi_obat !!}
              </p>
            </div>
          </div>

          <div class="col-lg-6">
              <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                  <ul>
                      <li><strong>Indikasi Obat</strong>: {!! $products->indikasi_obat !!}</li>
                      <li><strong>Komposisi Obat</strong>: {!! $products->komposisi_obat !!}</li>
                      <li><strong>Dosis Obat</strong>: {!! $products->dosis_obat !!}</li>
                  </ul>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                  <ul>
                      <li><strong>Penggunaan Obat</strong>: {!! $products->penggunaan_obat !!}</li>
                      <li><strong>Efek Samping</strong>: {!! $products->efek_samping !!}</li>
                      <li><strong>Kontraindikasi</strong>: {!! $products->kontraindikasi !!}</li>
                  </ul>
              </div>
          </div>

        </div>
      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-4">
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

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
    AI (Chat Bot)
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