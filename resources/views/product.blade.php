<?php
// Assuming you have a Product model
use App\Models\Products;

// kategori
$kategori_1 = Products::where('kategori_obat', 'Anemia')->get();
$kategori_2 = Products::where('kategori_obat', 'Demam')->get();
$kategori_3 = Products::where('kategori_obat', 'Sakit kepala')->get();
$kategori_4 = Products::where('kategori_obat', 'Asma')->get();
$kategori_5 = Products::where('kategori_obat', 'Penyakit lambung')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Medicine Page - PMR</title>
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
  <div
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/img/SMKN 2.png" alt="SMK NEGERI 2 KOTA BEKASI" class="img-fluid">
      &nbsp;&nbsp;<img src="assets/img/PMI.png" alt="PMR" class="img-fluid">
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#divisi">Divisi</a></li>
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

        <div class="row">
          <div class="col-lg-8">

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100" id="categorySelect">
            <li data-filter="*" class="filter-active" onclick="updateDescription(this)">All</li>
            <li data-filter=".filter-Anemia" value="Anemia" onclick="updateDescription(this)">Anemia</li>
            <li data-filter=".filter-Demam" value="Demam" onclick="updateDescription(this)">Demam</li>
            <li data-filter=".filter-Sakit-kepala" value="sakitKepala" onclick="updateDescription(this)">Sakit kepala</li>
            <li data-filter=".filter-Asma" value="Asma" onclick="updateDescription(this)">Asma</li>
            <li data-filter=".filter-Penyakit-lambung" value="penyakitLambung" onclick="updateDescription(this)">Penyakit lambung</li>
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
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-Anemia">
                <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="##" class="preview-link" onclick="addToCheckout('{{ $nama_obat }}', '{{ $gambar_obat }}')"><i class="bi bi-bag-plus"></i></a>
                <a href="/medicine/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div><!-- End Portfolio Item -->
      @endforeach

            @foreach ($kategori_2 as $products) 
              <?php
  $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
  $nama_obat = $products->nama_obat;
  $productsId = $products->id;
              ?>
              <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-Demam">
                <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="##" class="preview-link" onclick="addToCheckout('{{ $nama_obat }}', '{{ $gambar_obat }}')"><i class="bi bi-bag-plus"></i></a>
                <a href="/medicine/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
      @endforeach

            @foreach ($kategori_3 as $products) 
                <?php
  $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
  $nama_obat = $products->nama_obat;
  $productsId = $products->id;
                ?>
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-Sakit-kepala">
                <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="##" class="preview-link" onclick="addToCheckout('{{ $nama_obat }}', '{{ $gambar_obat }}')"><i class="bi bi-bag-plus"></i></a>
                <a href="/medicine/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div><!-- End Portfolio Item -->
        @endforeach

            @foreach ($kategori_4 as $products)  
                <?php
  $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
  $nama_obat = $products->nama_obat;
  $productsId = $products->id;
                ?>
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-Asma">
                <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="##" class="preview-link" onclick="addToCheckout('{{ $nama_obat }}', '{{ $gambar_obat }}')"><i class="bi bi-bag-plus"></i></a>
                <a href="/medicine/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div><!-- End Portfolio Item -->
        @endforeach

            @foreach ($kategori_5 as $products)  
                <?php
  $gambar_obat = Storage::disk('public')->url($products->gambar_obat);
  $nama_obat = $products->nama_obat;
  $productsId = $products->id;
                ?>
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-Penyakit-lambung">
                <img src="{{ $gambar_obat }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>{{ $nama_obat }}</h4>
                <a href="##" class="preview-link" onclick="addToCheckout('{{ $nama_obat }}', '{{ $gambar_obat }}')"><i class="bi bi-bag-plus"></i></a>
                <a href="/medicine/{{ $productsId }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div><!-- End Portfolio Item -->
        @endforeach
            
          </div><!-- End Portfolio Container -->
        <br><br>
        </div>

          </div>

          <!-- Card Section -->
          <div class="col-lg-4">
            <div class="p-5 d-flex flex-column bg-body-tertiary shadow rounded-4">
              <div class="mt-auto">
                <h2><strong>Checkout Products</strong></h2>
                <div id="checkoutProducts"></div>
                <hr class="opacity-10">
                <h4 class="my-4">Total Products <strong id="totalProducts">0</strong></h4>
                <button class="btn btn-primary text-white w-100" id="checkout">Checkout</button>
              </div>
            </div>
          </div>

          </div>
          </div>
          </section>

  </main>

    <footer id="footer" class="footer">
    
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
              <img src="assets/img/logo.png" alt="logo">
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Lap. Bola Rw. Butun, Ciketing Udik</p>
              <p>Kec. Bantar Gebang, Kota Bks, Jawa Barat 17153</p>
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
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  {{-- Script kategori penyakit --}}
  <script>
      function updateDescription(element) {
          const descriptions = {
              Anemia: "Kondisi kekurangan sel darah merah atau hemoglobin dalam darah, yang menyebabkan tubuh kekurangan oksigen. (Contoh: Anemia defisiensi besi, anemia aplastik, anemia sel sabit)",
              Demam: "Peningkatan suhu tubuh di atas normal sebagai respons terhadap infeksi atau kondisi medis lainnya. (Contoh: Demam berdarah, demam malaria)",
              sakitKepala: "Rasa nyeri atau tekanan di kepala yang bisa disebabkan oleh berbagai faktor, termasuk stres, ketegangan otot, atau penyakit tertentu. (Contoh: Migrain, sakit kepala)",
              Asma: "Penyakit pernapasan kronis yang menyebabkan penyempitan dan peradangan saluran udara, sering kali dipicu oleh alergi atau iritan. (Gejala: Sesak napas, batuk)",
              penyakitLambung: "Gangguan pada lambung yang dapat menyebabkan nyeri, mual, atau gangguan pencernaan. (Contoh: Gastritis, tukak lambung, GERD/refluks asam)",
          };

          const value = element.getAttribute('value');
          const descriptionDiv = document.getElementById('description');

          descriptionDiv.textContent = descriptions[value] || "Pilih kategori penyakit untuk melihat deskripsinya.";
      }
  </script>

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

<script>
  let totalProducts = 0;
  let cart = {}; // Menyimpan produk dalam format { namaObat: { qty, image } }

  function addToCheckout(name, image) {
    if (!cart[name]) {
      cart[name] = { qty: 1, image: image };
    } else {
      cart[name].qty++;
    }
    renderCart();
    updateTotal();
  }

  function renderCart() {
    const checkoutProducts = document.getElementById('checkoutProducts');
    checkoutProducts.innerHTML = ''; // Kosongkan sebelum render ulang

    Object.keys(cart).forEach(name => {
      const product = cart[name];
      const productDiv = document.createElement('div');
      productDiv.classList.add('card', 'mb-3');
      productDiv.style.maxWidth = '600px';
      productDiv.innerHTML = `
      <div class="row g-0">
        <div class="col-md-5">
          <img src="${product.image}" class="img-fluid rounded-start" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <div class="d-flex align-items-center justify-content-between flex-wrap">
              <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity('${name}', -1)">-</button>
                <span class="mx-2" id="qty-${name}">${product.qty}</span>
                <button class="btn btn-outline-secondary btn-sm" onclick="updateQuantity('${name}', 1)">+</button>
              </div>
              <button class="btn btn-danger btn-sm ms-2 mt-2 mt-md-0" onclick="deleteItem('${name}')" style="min-width: 60px;">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      `;
      checkoutProducts.appendChild(productDiv);
    });
  }

  function updateQuantity(name, change) {
    if (cart[name]) {
      cart[name].qty += change;
      if (cart[name].qty <= 0) {
        delete cart[name]; // Hapus produk jika qty <= 0
      }
      renderCart();
      updateTotal();
    }
  }

  function deleteItem(name) {
    if (cart[name]) {
      delete cart[name]; // Hapus produk dari cart
      renderCart();
      updateTotal();
    }
  }

  function updateTotal() {
    totalProducts = Object.values(cart).reduce((sum, product) => sum + product.qty, 0);
    document.getElementById('totalProducts').innerText = totalProducts;
  }

  const Checkout = document.getElementById('checkout');
    Checkout.addEventListener('click', function () {
      if (Object.keys(cart).length === 0) {
        Swal.fire({
          title: "Oops!",
          text: "Belum ada produk yang ditambahkan ke dalam cart.",
          icon: "warning"
        });
        return;
      }

      const today = new Date();
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      const dateOptions = [];

      for (let i = 0; i < 3; i++) {
        const futureDate = new Date();
        futureDate.setDate(today.getDate() + i);
        dateOptions.push(`<option value="${futureDate.toISOString().split('T')[0]}">${futureDate.toLocaleDateString('id-ID', options)}</option>`);
      }

      Swal.fire({
        title: "Complete Your Data",
        html: `
      <input id="swal-name" class="swal2-input" placeholder="Full Name" style="width: 70%">
      
      <select id="swal-major" class="swal2-select" style="width: 70%">
        <option value="" disabled selected>Pilih Role</option>
        
        <option value="Guru / Staff">Guru / Staff</option>

        // Kelas 10
        <option value="X TKJ 1">X TKJ 1</option>
        <option value="X TKJ 2">X TKJ 2</option>
        <option value="X TKJ 3">X TKJ 3</option>
        <option value="X TKJ K.I">X TKJ K.I</option>

        <option value="X RPL 1">X RPL 1</option>
        <option value="X RPL 2">X RPL 2</option>
        <option value="X RPL 3">X RPL 3</option>
        <option value="X RPL K.I">X RPL K.I</option>

        <option value="X AK 1">X AK 1</option>
        <option value="X AK 2">X AK 2</option>
        <option value="X AK 3">X AK 3</option>

        <option value="X TEI 1">X TEI 1</option>
        <option value="X TEI 2">X TEI 2</option>
        <option value="X TEI 3">X TEI 3</option>
        <option value="X TEI K.I">X TEI K.I</option>

        <option value="X TO 1">X TO 1</option>
        <option value="X TO 2">X TO 2</option>
        <option value="X TO 3">X TO 3</option>
        <option value="X TO K.I">X TO K.I</option>

        <option value="X TET 1">X TET 1</option>
        <option value="X TET 2">X TET 2</option>
        <option value="X TET 3">X TET 3</option>

        // Kelas 11
        <option value="XI TKJ 1">XI TKJ 1</option>
        <option value="XI TKJ 2">XI TKJ 2</option>
        <option value="XI TKJ 3">XI TKJ 3</option>
        <option value="XI TKJ K.I">XI TKJ K.I</option>

        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="XI RPL 3">XI RPL 3</option>
        <option value="XI RPL K.I">XI RPL K.I</option>

        <option value="XI AK 1">XI AK 1</option>
        <option value="XI AK 2">XI AK 2</option>
        <option value="XI AK 3">XI AK 3</option>

        <option value="XI TEI 1">XI TEI 1</option>
        <option value="XI TEI 2">XI TEI 2</option>
        <option value="XI TEI 3">XI TEI 3</option>
        <option value="XI TEI K.I">XI TEI K.I</option>

        <option value="XI TO 1">XI TO 1</option>
        <option value="XI TO 2">XI TO 2</option>
        <option value="XI TO 3">XI TO 3</option>
        <option value="XI TO K.I">XI TO K.I</option>

        <option value="XI TET 1">XI TET 1</option>
        <option value="XI TET 2">XI TET 2</option>
        <option value="XI TET 3">XI TET 3</option>

        // Kelas 12
        <option value="XII TKJ 1">XII TKJ 1</option>
        <option value="XII TKJ 2">XII TKJ 2</option>
        <option value="XII TKJ 3">XII TKJ 3</option>
        <option value="XII TKJ K.I">XII TKJ K.I</option>

        <option value="XII RPL 1">XII RPL 1</option>
        <option value="XII RPL 2">XII RPL 2</option>
        <option value="XII RPL 3">XII RPL 3</option>
        <option value="XII RPL K.I">XII RPL K.I</option>

        <option value="XII AK 1">XII AK 1</option>
        <option value="XII AK 2">XII AK 2</option>
        <option value="XII AK 3">XII AK 3</option>

        <option value="XII TEI 1">XII TEI 1</option>
        <option value="XII TEI 2">XII TEI 2</option>
        <option value="XII TEI 3">XII TEI 3</option>
        <option value="XII TEI K.I">XII TEI K.I</option>

        <option value="XII TO 1">XII TO 1</option>
        <option value="XII TO 2">XII TO 2</option>
        <option value="XII TO 3">XII TO 3</option>
        <option value="XII TO K.I">XII TO K.I</option>

        <option value="XII TET 1">XII TET 1</option>
        <option value="XII TET 2">XII TET 2</option>
        <option value="XII TET 3">XII TET 3</option>

      </select>
      
      <select id="swal-date" class="swal2-select" style="width: 70%">
        <option value="" disabled selected>Pilih Tanggal Pengambilan</option>
        ${dateOptions.join('')}
      </select>
      
      <select id="swal-location" class="swal2-select" style="width: 70%">
        <option value="" disabled selected>Pilih Lokasi Pengambilan</option>
        <option value="Ruang UKS">Ruang UKS</option>
      </select>
      
      <select id="swal-time" class="swal2-select" style="width: 70%">
        <option value="" disabled selected>Pilih Jam Pengambilan</option>
        <option value="10:00 - 10.20 (Istirahat 1)">10:00 - 10.20 (Istirahat 1)</option>
        <option value="11:50 - 12.30 (Istirahat 2)">11:50 - 12.30 (Istirahat 2)</option>
        <option value="15:30 - 16:00 (Pulang Sekolah)">15:30 - 16:00 (Pulang Sekolah)</option>
        <option value="URGENT (NOW)">URGENT (NOW)</option>
      </select>
      
      <textarea id="swal-note" class="swal2-textarea" placeholder="Tambahkan catatan (Opsional)" style="width: 70%"></textarea>
    `,
        showCancelButton: true,
        confirmButtonText: "Submit",
        preConfirm: () => {
          const name = document.getElementById('swal-name').value;
          const major = document.getElementById('swal-major').value;
          const date = document.getElementById('swal-date').value;
          const location = document.getElementById('swal-location').value;
          const time = document.getElementById('swal-time').value;
          const note = document.getElementById('swal-note').value || "Tidak ada catatan";

          if (!name || !major || !date || !location || !time) {
            Swal.showValidationMessage("Harap isi semua data yang wajib!");
          }

          return { name, major, date, location, time, note };
        }
      }).then((result) => {
        if (result.isConfirmed) {
          const formattedDate = new Date(result.value.date).toLocaleDateString('id-ID', options);

          Swal.fire({
            title: "Data Berhasil Dikirim!",
            html: `
          <b>Nama:</b> ${result.value.name}<br>
          <b>Jurusan:</b> ${result.value.major}<br>
          <b>Tanggal Pengambilan:</b> ${formattedDate}<br>
          <b>Lokasi:</b> ${result.value.location}<br>
          <b>Jam:</b> ${result.value.time}<br>
          <b>Catatan:</b> ${result.value.note}
        `,
            icon: "success"
          }).then(() => {
            // Mengonversi data ke format pesan WhatsApp
            let cartItems = Object.keys(cart)
              .map((name, index) => `${index + 1}. ${name} (Qty: ${cart[name].qty})`)
              .join("\n");

            let message = `Halo, saya ingin melakukan pemesanan obat dengan detail sebagai berikut:\n\n` +
              `Nama: ${result.value.name}\n` +
              `Jurusan: ${result.value.major}\n` +
              `Tanggal Pengambilan: ${formattedDate}\n` +
              `Lokasi: ${result.value.location}\n` +
              `Jam: ${result.value.time}\n` +
              `Catatan: ${result.value.note}\n\n` +
              `Produk:\n${cartItems}\n\nTerima kasih!`;

            // Nomor WhatsApp tujuan
            let phoneNumber = "+6282112271603";

            // Membuka WhatsApp dengan pesan yang sudah diformat
            let whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, "_blank");
          });
        }
      });
    });
</script>