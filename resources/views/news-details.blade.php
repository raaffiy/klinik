<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>News Details - PMR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
        <h1>News Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/news">News Page</a></li>
            <li class="current">News Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ Storage::disk('public')->url($news->gambar_berita) }}" alt="" class="img-fluid">
                </div>

                <p class="title">{{ $news->nama_berita }}</p>

                <div class="content">
                  <p>{!! $news->isi_berita !!}</p>

                  <img src="{{ Storage::disk('public')->url($news->gambar_berita_2) }}" class="img-fluid" alt=""> <br> <br>
                  
                  <p>{!! $news->isi_berita_2 !!}</p>

                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-person"></i>
                  <ul class="cats">
                    <li style="color:grey;">{{ $news->penulis_berita }}</li>
                  </ul>

                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li style="color:grey;">{{ $news->kategori_berita }}</li> 
                  </ul>

                  <i class="bi bi-tags"></i>
                  <ul class="tags">
                      <li style="color:grey;">
                          {{ implode(', ', $news->tags_berita) }}
                      </li>
                  </ul>

                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Search Widget -->
            <div class="search-widget widget-item">
              <h3 class="widget-title">Search</h3>
              <form action="{{ route('news.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search by News Name" value="{{ request('query') }}">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
              </form>
            </div>

            <!-- Categories Widget -->
            <div class="categories-widget widget-item">
              <h3 class="widget-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="{{ route('news.filter', ['category' => 'Kesehatan Umum']) }}">Kesehatan Umum</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Gizi dan Nutrisi']) }}">Gizi dan Nutrisi</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Penyakit dan Pencegahan']) }}">Penyakit dan Pencegahan</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Kesehatan Mental']) }}">Kesehatan Mental</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Olahraga dan Kebugaran']) }}">Olahraga dan Kebugaran</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Kesehatan Anak']) }}">Kesehatan Anak</a></li>
                <li><a href="{{ route('news.filter', ['category' => 'Kesehatan Lansia']) }}">Kesehatan Lansia</a></li>
              </ul>
            </div>
            <!-- /Categories Widget -->

            <!-- Tags Widget -->
            <div class="tags-widget widget-item">

              <h3 class="widget-title">Tags</h3>
              <ul>
                <li><a href="#">Tips Kesehatan</a></li>
                <li><a href="#">Edukasi Kesehatan</a></li>
                <li><a href="#">Trending Kesehatan</a></li>
                <li><a href="#">Panduan Hidup Sehat</a></li>
                <li><a href="#">Rekomendasi Diet</a></li>
              </ul>

            </div><!--/Tags Widget -->

          </div>

        </div>

      </div>
    </div>

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