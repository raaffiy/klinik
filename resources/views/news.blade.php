<?php
// Assuming you have a Product model
use App\Models\News;

$categories = News::select('kategori_berita')->distinct()->get();
$tags = News::select('tags_berita')->distinct()->get();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>News Page - gigiKu. Ahli Gigi</title>
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
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">iLanding</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>  
          <li><a href="/#team ">Teams</a></li>
          <li class="dropdown"><a href="/#features"><span>Features</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/news">News</a></li>
              <li><a href="/medicine">Medicine</a></li>
              <li><a href="/chat">AI (GIGIKU)</a></li>
            </ul>
          </li>
          &nbsp;&nbsp;
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>News Page</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">News Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container">
              <div class="row gy-4">

                <div class="container">
                    <div class="row gy-4">
                        @if ($all_news->count() > 0)
                          @foreach ($all_news as $news)
                            <div class="col-lg-6">
                            <article>
                            <div class="post-img">
                              <img src="{{ Storage::disk('public')->url($news->gambar_berita) }}" alt="" class="img-fluid">
                            </div>
                            <p class="post-category">{{ $news->kategori_berita }}</p>
                            <h2 class="title">
                              <a href="{{ route('news.details', $news->id) }}">{{ $news->nama_berita }}</a>
                            </h2>
                            </article>
                            </div>
                          @endforeach
                          @else
                          <div class="alert alert-info text-center">
                            Tidak ada berita yang ditemukan. Silakan coba kata kunci atau filter yang berbeda.
                          </div>
                      @endif
                    </div>
                </div>
                
              </div>
            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <section id="blog-pagination" class="blog-pagination section">

            <div class="blog-pagination section">
                <div class="d-flex justify-content-center">
                    {{ $all_news->appends(['query' => request('query')])->links('pagination::bootstrap-4') }}
                </div>
            </div>

          </section><!-- /Blog Pagination Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            {{-- Search --}}
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

          <!-- Random Topics -->
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title">Random Topics</h3>
          
            @foreach ($random_news as $news)
              <div class="post-item">
              <img src="{{ Storage::disk('public')->url($news->gambar_berita) }}" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="{{ route('news.details', $news->id) }}">{{ $news->nama_berita }}</a></h4>
                <time datetime="2020-01-01">{{ implode(', ', $news->tags_berita) }}</time>
              </div>
              </div><!-- End recent post item-->
            @endforeach
          </div>

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="logo d-flex align-items-center">
            <span class="sitename">iLanding</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>