<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AI - gigiKu. Ahli Gigi</title>
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
  <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
  <meta name="scrf-token" content="{{ csrf_token() }}">

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
              <li><a href="/medicine">Medicine</a></li>
              <li><a href="/ai">AI (GIGIKU)</a></li>
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
        <h1>AI</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">AI</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- AI Section -->
    <section id="blog-details" class="blog-details section">
      <div class="container">

        <article class="article">

          <div class="flex h-screen antialiased text-gray-800 ">
          <div class="flex flex-row h-full w-full overflow-x-hidden">
            <div class="flex flex-col flex-auto h-full p-1">
              <div
                class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-300 h-full p-4"
              >
                <div class="flex flex-col h-full overflow-x-auto mb-4">
                  <div class="flex flex-col h-full">
                    <div class="grid grid-cols-12 gap-y-2">
                    </div>
                  </div>
                </div>
                <div
                  class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
                >
                  <div>
                    <button
                      class="flex items-center justify-center text-gray-400 hover:text-gray-600"
                    >
                      <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-1">
                    <div class="flex-grow ml-2">
                      <div class="relative w-full">
                        <input id="userMessage" type="text"
                          class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                          placeholder="Tulis pesan Anda..." />
                      </div>
                    </div>
                    <div class="ml-4">
                      <button id="sendMessage"
                        class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                        <span>Kirim</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </article>

      </div>
    </section><!-- /AI Section -->

  </main>

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
<script>
  async function sendMessage() {
    const userMessage = document.getElementById('userMessage').value;

    if (!userMessage.trim()) return;

    const chatContainer = document.querySelector('.grid');
    chatContainer.innerHTML += `
      <div class="col-start-6 col-end-13 p-3 rounded-lg">
        <div class="flex items-center justify-start flex-row-reverse">
          <div
            class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
          >
            <div>${userMessage}</div>
          </div>
        </div>
      </div>
    `;

    document.getElementById('userMessage').value = '';

    const response = await fetch('/chat/send', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="scrf-token"]').getAttribute('content'),
      },
      body: JSON.stringify({ message: userMessage }),
    });

    const data = await response.json();
    let aiMessage = data.choices[0]?.message?.content || 'Tidak ada respons dari AI.';

    // Menambahkan logika untuk mengganti angka dengan <br> sebelum angka
    aiMessage = aiMessage.replace(/(\d+)\./g, '<br>$1.');

    // Menambahkan logika untuk mengganti (:) dengan <br><br>
    aiMessage = aiMessage.replace(/\:/g, '<br>');

    // Mengubah teks dalam tanda kurung (*) menjadi teks bold
    aiMessage = aiMessage.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>');

    chatContainer.innerHTML += `
      <div class="col-start-1 col-end-8 p-3 rounded-lg">
        <div class="flex flex-row items-center">
          <div
            class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
          >
            <div>${aiMessage}</div>
          </div>
        </div>
      </div>
    `;
  }

  document.getElementById('sendMessage').addEventListener('click', sendMessage);

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      sendMessage();
    }
  });
</script>