<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>HISTORE - Outfit keren</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <script src="{{ asset('js/jQuery.min.js') }}"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');

    * {
      font-family: 'Poppins', sans-serif;
    }

    .text-title {
      font-family: 'Inter', sans-serif !important;
    }

    .bg-dark-primary {
      background-color: #2F2F2F !important;
    }

    .jumbotron {
      min-height: 80vh;
      background: url('/img/jumbotron.jpg');
      background-position: 250px -150px;
      background-size: cover;
      background-attachment: fixed;
    }

    .jumbotron h1 {
      font-size: 2.5rem;
    }

    a.card {
      width: 100%;
      height: 350px;
      background-color: gray;
    }

    .product .card {
      width: 100%;
      height: 300px;
      background-color: gray;
    }

    a.card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .discount img {
      width: 100%;
      height: 350px;
      object-fit: cover;
    }

    footer {
      height: 200px;
      background-color: #3C3C3C;
      margin-top: 200px;
    }
  </style>
</head>

<body>
  <nav class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="btn-menu relative inline-flex items-center justify-center rounded-md p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <h1 class="text-title font-medium">HISTORE</h1>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-2">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="bg-gray-100 text-gray-700 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Beranda</a>
              <a href="/product" class="text-gray-700 hover:bg-gray-100 hover:text-gray-800 rounded-md px-3 py-2 text-sm font-medium">Produk</a>
              <a href="/contact" class="text-gray-700 hover:bg-gray-100 hover:text-gray-800 rounded-md px-3 py-2 text-sm font-medium">Kontak</a>
            </div>
          </div>
        </div>
        <div class="inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- Profile dropdown -->
          <a href="" class="text-gray-700 hover:text-gray-900 me-4 sm:me-5"><i class="bi bi-search"></i></a>
          <a href="" class="text-gray-700 hover:text-gray-900 me-4 sm:me-5"><i class="bi bi-cart"></i></a>
          <p class="sm:inline hidden">|</p>
          <div class="relative ml-3">
            <div class="sm:inline-block hidden">
              <a href="/register" class="text-gray-700 hover:bg-gray-100  hover:text-gray-800 rounded-md px-3 py-2 me-2 text-sm font-medium">Daftar</a>
              <a href="/login" class="bg-dark-primary text-gray-200 rounded-md  px-5 py-2 text-sm font-medium" aria-current="page">Masuk</a>
            </div>
            <div class="absolute hidden right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="bg-gray-100 text-gray-700 block rounded-md px-3 py-2 text-sm text-base font-medium" aria-current="page">Beranda</a>
        <a href="/product" class="text-gray-700 hover:bg-gray-100 hover:text-gray-700 block rounded-md px-3 py-2 text-sm text-base font-medium">Produk</a>
        <a href="/contact" class="text-gray-700 hover:bg-gray-100 hover:text-gray-700 block rounded-md px-3 py-2 text-sm text-base font-medium">Kontak</a>
        <div>
          <a href="/register" class="text-gray-700 hover:bg-gray-100 block hover:text-gray-800 rounded-md px-3 py-2 me-2 text-sm font-medium">Daftar</a>
          <a href="/login" class="bg-dark-primary text-gray-200 rounded-md block px-5 py-2 text-sm font-medium" aria-current="page">Masuk</a>
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5 product flex items-center justify-between h-full">
      <div>
        <h1 class="text-gray-100 text-lg font-bold">HISTORE</h1>
        <h2 class="text-gray-200 font-light text-sm pt-2">Makassar, Sulawesi Selatan, Indonesia</h2>
        <h2 class="text-gray-200 font-light text-sm pt-2">Jl. Perintis Kemerdekaan Km.100</h2>
      </div>
      <div>
        <h1 class="text-slate-100">Copyright ©2023 HISTORE</h1>
      </div>
    </div>
  </footer>
  <script>
    $('.btn-menu').on('click', () => {
      $('#mobile-menu').toggleClass('hidden')
    })
  </script>
</body>

</html>