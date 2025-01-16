<?php
// Assuming you have a Product model
use App\Models\Products;

// kategori
$kategori_1 = Products::where('kategori_obat', 'Infeksi')->get();
$kategori_2 = Products::where('kategori_obat', 'Saluran Pernapasan')->get();
$kategori_3 = Products::where('kategori_obat', 'Pencernaan')->get();
$kategori_4 = Products::where('kategori_obat', 'Metabolik')->get();
$kategori_5 = Products::where('kategori_obat', 'Kulit')->get();
$kategori_6 = Products::where('kategori_obat', 'Mental atau Psikologis')->get();
$kategori_7 = Products::where('kategori_obat', 'Kanker')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Medicine Page - gigiKu. Ahli Gigi</title>
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

<body class="starter-page-page">


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
              <li><a href="/product">Medicine</a></li>
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
        <h1>Medicine Page</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Medicine Page</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100" id="categorySelect">
            <li data-filter="*" class="filter-active" onclick="updateDescription(this)">All</li>
            <li data-filter=".filter-infeksi" value="infeksi" onclick="updateDescription(this)">Infeksi</li>
            <li data-filter=".filter-saluran-pernapasan" value="saluranPernapasan" onclick="updateDescription(this)">Saluran Pernapasan</li>
            <li data-filter=".filter-pencernaan" value="pencernaan" onclick="updateDescription(this)">Pencernaan</li>
            <li data-filter=".filter-metabolik" value="metabolik" onclick="updateDescription(this)">Metabolik</li>
            <li data-filter=".filter-kulit" value="kulit" onclick="updateDescription(this)">Kulit</li>
            <li data-filter=".filter-mental" value="mental" onclick="updateDescription(this)">Mental atau Psikologis</li>
            <li data-filter=".filter-kanker" value="kanker" onclick="updateDescription(this)">Kanker</li>
            <br><br>
            <div class="card" style="color: #6995ab; background-color: #f0f0f0; border-color: #f0f0f0; border-radius: 10px; padding: 5px; margin: 5px; text-align: center; font-size: 18px; font-weight: bold;">
                <div class="card-body" id="description">
                    Pilih kategori penyakit untuk melihat deskripsinya.
                </div>
            </div>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($kategori_1 as $products)
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infeksi">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_2 as $products) 
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-saluran-pernapasan">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_3 as $products) 
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-pencernaan">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_4 as $products)  
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-metabolik">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_5 as $products)  
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kulit">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_6 as $products)  
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mental">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

            @foreach ($kategori_7 as $products)  
            <?php
              $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
              $nama_obat = $products->nama_obat;
              $productsId = $products->id;
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kanker">
              <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="{{ $gambar_obat }}" title="{{ $nama_obat }}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/product-details/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

          </div><!-- End Portfolio Container -->

        </div>
      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer">
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
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  {{-- Script kategori penyakit --}}
  <script>
      function updateDescription(element) {
          const descriptions = {
              infeksi: "Penyakit yang disebabkan oleh mikroorganisme seperti bakteri, virus, jamur, atau parasit. (Flu, TBC, DBD, Pneumonia, HIV/AIDS)",
              saluranPernapasan: "Penyakit yang memengaruhi sistem pernapasan. (Asma, Bronkitis, Sinusitis, Emfisema)",
              pencernaan: "Penyakit yang memengaruhi sistem pencernaan, seperti masalah lambung. (Radang Lambung, Diare, Sembelit , Maag Kronis)",
              metabolik: "Penyakit yang terkait dengan metabolisme tubuh. (Kolesterol Tinggi, Obesitas, Asam Urat)",
              kulit: "Penyakit yang memengaruhi kulit atau jaringan lunak. (Psoriasis, Jerawat, Infeksi Jamur)",
              mental: "Gangguan yang memengaruhi kesehatan mental dan emosional. (Depresi, Gangguan Cemas, Skizofrenia, Bipolar)",
              kanker: "Penyakit akibat pertumbuhan sel abnormal yang tidak terkendali. (Kanker Payudara, Kanker Paru-paru, Kanker Usus Besar, Leukemia)"
          };

          const value = element.getAttribute('value');
          const descriptionDiv = document.getElementById('description');

          descriptionDiv.textContent = descriptions[value] || "Pilih kategori penyakit untuk melihat deskripsinya.";
      }
  </script>

</body>

</html>