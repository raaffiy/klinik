<?php
// Assuming you have a Product model
use App\Models\News;

// kategori
$kategori_1 = News::where('kategori_berita', 'Kesehatan Umum')->get();
$kategori_2 = News::where('kategori_berita', 'Gizi dan Nutrisi')->get();
$kategori_3 = News::where('kategori_berita', 'Penyakit dan Pencegahan')->get();
$kategori_4 = News::where('kategori_berita', 'Kesehatan Mental')->get();
$kategori_5 = News::where('kategori_berita', 'Olahraga dan Kebugaran')->get();
$kategori_6 = News::where('kategori_berita', 'Kesehatan Anak')->get();
$kategori_7 = News::where('kategori_berita', 'Kesehatan Lansia')->get();
$all_news = News::paginate(4); 

// Tags
$tag_1 = News::where('tags_berita', 'Tips Kesehatan')->get();
$tag_2 = News::where('tags_berita', 'Edukasi Kesehatan')->get();
$tag_4 = News::where('tags_berita', 'Trending Kesehatan')->get();
$tag_5 = News::where('tags_berita', 'Panduan Hidup Sehat')->get();
$tag_6 = News::where('tags_berita', 'Rekomendasi Diet')->get();
$all_tags = News::all();
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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
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
              <li><a href="/product">Products</a></li>
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

                @foreach ($all_news as $news)
                  <?php
                      $gambar_berita = Storage::disk('public')->url($news->gambar_berita);
                      $nama_berita = $news->nama_berita;
                      $kategori_berita = $news->kategori_berita;
                      $newsId = $news->id;
                  ?>
                  <div class="col-lg-6">
                      <article>
                          <div class="post-img">
                              <img src="{{ $gambar_berita }}" alt="" class="img-fluid">
                          </div>
                          
                          <p class="post-category">{{ $kategori_berita }}</p>
                          
                          <h2 class="title">
                              <a href="/news-details/{{ $newsId }}">{{ $nama_berita }}</a>
                          </h2>
                      </article>
                  </div><!-- End post list item -->
              @endforeach
                
              </div>
            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <section id="blog-pagination" class="blog-pagination section">

            <div class="blog-pagination section">
                <div class="d-flex justify-content-center">
                    {{ $all_news->links('pagination::bootstrap-4') }}
                </div>
            </div>

          </section><!-- /Blog Pagination Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Search Widget -->
            <div class="search-widget widget-item">

              <h3 class="widget-title">Search</h3>
              <form action="">
                <input type="text">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
              </form>

            </div><!--/Search Widget -->

            <!-- Categories Widget -->
            <div class="categories-widget widget-item">

              <h3 class="widget-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="#">Kesehatan Umum<span></span></a></li>
                <li><a href="#">Gizi dan Nutrisi<span></span></a></li>
                <li><a href="#">Penyakit dan Pencegahan<span></span></a></li>
                <li><a href="#">Kesehatan Mental<span></span></a></li>
                <li><a href="#">Olahraga dan Kebugaran<span></span></a></li>
                <li><a href="#">Kesehatan Anak<span></span></a></li>
                <li><a href="#">Kesehatan Lansia<span></span></a></li>
              </ul>

            </div><!--/Categories Widget -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>