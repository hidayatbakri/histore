<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>HISTORE - Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script src="{{ asset('js/jQuery.min.js') }}"></script>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .text-title {
      font-family: 'Inter', sans-serif !important;
    }

    .sidebar {
      min-height: 100vh;
      animation: .5s ease;
      width: 320px;
    }


    .sidebar.mini {
      width: 0 !important;
      overflow: hidden;
      left: -500px;
    }

    @media (max-width: 1022.9px) {
      .sidebar {
        width: 0px;
        left: -500px;
      }

      .sidebar.mini {
        width: 320px !important;
        animation: .5s ease;
        left: 0;
      }
    }
  </style>

</head>

<body>
  <div class="flex">
    <div class="sidebar duration-300 ease-in-out absolute lg:static w-80 bg-slate-900 px-3">
      <h1 class="text-gray-200 text-center py-5 text-xl font-bold text-title">HISTORE</h1>

      <div class="sidebar-menu mt-10">
        <h4 class="text-gray-200 mb-3">Main</h4>
        <ul>
          <li class="py-1 bg-slate-700 rounded-md"><a href="/owner" class="text-slate-200 text-sm ps-3 hover:text-slate-100"><i class="bi bi-house pe-3"></i> Dashboard</a></li>
          <li class="py-1"><a href="/cart" class="text-slate-200 text-sm ps-3 hover:text-slate-100"><i class="bi bi-bag pe-3"></i> Keranjang</a></li>
          <li class="py-1"><a href="/transactions" class="text-slate-200 text-sm ps-3 hover:text-slate-100"><i class="bi bi-box pe-3"></i> Pesanan</a></li>
        </ul>
        <h4 class="text-gray-200 my-3">Owner</h4>
        <ul>
          <li class="py-1"><a href="#" class="text-slate-200 text-sm ps-3"><i class="bi bi-people pe-3"></i> Pengguna</a></li>
          <li class="py-1"><a href="/owner/items" class="text-slate-200 text-sm ps-3"><i class="bi bi-boxes pe-3"></i> Barang</a></li>
          <li class="py-1"><a href="#" class="text-slate-200 text-sm ps-3 hover:text-slate-100"><i class="bi bi-dropbox pe-3"></i> Transaksi</a></li>
        </ul>
        <h4 class="text-gray-200 my-3">Lainnya</h4>
        <ul>
          <li class="py-1"><a href="#" class="text-slate-200 text-sm ps-3"><i class="bi bi-gear-fill pe-3"></i> Pengaturan</a></li>
          <li class="py-1"><a href="#" class="text-slate-200 text-sm ps-3 hover:text-red-500"><i class="bi bi-box-arrow-right pe-3"></i> Keluar</a></li>
        </ul>
      </div>
    </div>
    <div class="flex-1">
      <button id="btn-sidebar" class="absolute inline-block lg:hidden text-slate-600 text-3xl w-12 h-12 top-3 left-3 rounded"><i class="bi bi-list"></i></button>
      <nav class="h-16 shadow w-full flex items-center px-5 justify-end">
        <div class="flex items-center gap-3">
          <img src="{{ asset('img/orang1.jpg') }}" alt="avatar" class="rounded-full w-9 h-9" style="object-fit: cover;">
          <button class="text-slate-600 text-sm hover:text-slate-900">
            Hidayat Bakri <i class="bi bi-chevron-down ps-2"></i>
          </button>
        </div>
      </nav>
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        @yield('content')
      </div>
    </div>
  </div>

  <script>
    $('#btn-sidebar').on('click', () => {
      $('.sidebar').toggleClass('mini')
    })

    setInterval(() => {
      if ($(window).width() > 1022.9) {
        $('.sidebar').removeClass('mini')
      } else {

      }
    }, 500);
  </script>
</body>

</html>