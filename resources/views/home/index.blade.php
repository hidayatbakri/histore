@extends('template.main')
@section('content')

<!-- Style the bar as you like -->
<style>
  .my-slider-progress {
    background: #ccc;
  }

  .my-slider-progress-bar {
    background: greenyellow;
    height: 2px;
    transition: width 400ms ease;
    width: 0;
  }

  .splide__slide {
    background-color: #F3F5F5;
    margin: 5px !important;
    /* height: 200px; */
    min-width: 300px !important;
    min-height: 200px;
    border-radius: 5px;
    padding: 5px !important;
  }

  .splide__slide img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 50px;
  }
</style>

<!-- Jumbotron -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <div class="jumbotron bg-black mt-5 py-3 rounded flex items-center px-4 sm:px-8">
    <div>
      <h1 class="text-white text-title font-medium">Temukan Outfit <br>
        Terkeren Kamu Hanya <br>
        di <b>HISTORE</b></h1>
      <a href="">
        <button class="bg-gray-600 text-gray-100 p-3 rounded mt-7 hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Belanja Sekarang</button>
      </a>
    </div>
  </div>
</div>

<!-- kategori -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20 py-5">
  <h1 class="text-center text-xl font-medium text-slate-700">Kategori Tersedia</h1>
  <p class="text-slate-500 text-center pt-3">Ayo lihat beberapa kategori yang tersedia pada produk kami, ayo buruan pesan sekarang </p>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-10">
    <a href="" class="card rounded relative group ">
      <img src="/img/sepatu1.jpg" class="rounded">
      <h1 class="text-title font-bold italic text-2xl absolute bottom-3 left-3 text-white group-hover:bottom-4 duration-200 ease">Sepatu</h1>
    </a>
    <a href="" class="card rounded relative group">
      <img src="/img/baju1.jpg" class="rounded">
      <h1 class="text-title font-bold italic text-2xl absolute bottom-3 left-3 text-white group-hover:bottom-4 duration-200 ease">Baju</h1>
    </a>
    <a href="" class="card rounded relative group">
      <img src="/img/celana1.jpg" class="rounded">
      <h1 class="text-title font-bold italic text-2xl absolute bottom-3 left-3 text-white group-hover:bottom-4 duration-200 ease">Celana</h1>
    </a>
    <a href="" class="card rounded relative group">
      <img src="/img/topi1.jpg" class="rounded">
      <h1 class="text-title font-bold italic text-2xl absolute bottom-3 left-3 text-white group-hover:bottom-4 duration-200 ease ">Topi</h1>
    </a>
  </div>
</div>

<!-- Layanan -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20 py-5">
  <h1 class="text-center text-xl font-medium text-slate-700">Layanan Kami</h1>
  <p class="text-slate-500 text-center pt-3">Kami menyediakan layanan yang baik demi kenyamanan, kelancaran dan keamanan pada <br>
    saat proses transaksi belanja dilakukan</p>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-10">
    <div class="card rounded group bg-gray-200 px-3 items-center h-48 flex items-center">
      <div>
        <i class="bi bi-credit-card text-slate-700 text-2xl"></i>
        <h1 class="text-title font-medium text-slate-700 pt-2">Pembayaran mudah</h1>
        <p class="text-sm text-slate-600 pt-2">Pembayaran yang mudah
          dan cepat untuk pengguna</p>
      </div>
    </div>
    <div class="card rounded group bg-gray-200 px-3 items-center h-48 flex items-center">
      <div>
        <i class="bi bi-percent text-slate-700 text-2xl"></i>
        <h1 class="text-title font-medium text-slate-700 pt-2">Diskon</h1>
        <p class="text-sm text-slate-600 pt-2">Kami memberikan diskon
          yang menarik</p>
      </div>
    </div>
    <div class="card rounded group bg-gray-200 px-3 items-center h-48 flex items-center">
      <div>
        <i class="bi bi-truck text-slate-700 text-2xl"></i>
        <h1 class="text-title font-medium text-slate-700 pt-2">Pengiriman</h1>
        <p class="text-sm text-slate-600 pt-2">Pengiriman yang cepat
          dan pasti aman</p>
      </div>
    </div>
    <div class="card rounded group bg-gray-200 px-3 items-center h-48 flex items-center">
      <div>
        <i class="bi bi-headset text-slate-700 text-2xl"></i>
        <h1 class="text-title font-medium text-slate-700 pt-2">Customer service</h1>
        <p class="text-sm text-slate-600 pt-2">Dapatkan bantuan 24/7</p>
      </div>
    </div>
  </div>
</div>

<!-- info -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20 py-5 discount">
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">
    <div class="flex items-center">
      <div>
        <h1 class="text-xl font-medium text-slate-700">Spesial Diskon Sampai 50%</h1>
        <p class="text-slate-500 pt-3">Tampil lebih trendy dengan koleksi outfit terbaru kami! Dapatkan Spesial Diskon Sampai 50% untuk setiap pembelian baju, celana, sepatu, dan topi. Jangan lewatkan kesempatan ini untuk mengeksplor gaya baru Anda dengan harga yang sangat istimewa!</p>
        <a href="" class="mt-5">
          <button class="bg-gray-600 text-gray-100 p-3 rounded mt-7 hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Belanja Sekarang</button>
        </a>
      </div>
    </div>
    <div>
      <img src="/img/diskon.jpg" alt="info-diskon" class="rounded">
    </div>
  </div>
</div>

<!-- produk -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20 py-5 product">
  <h1 class="text-center text-xl font-medium text-slate-700">Produk Populer</h1>
  <p class="text-slate-500 text-center pt-3">Lihat produk terlaris kami di HISTORE</p>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-10">
    <a href="" class="card rounded group">
      <img src="/img/produk1.jpg" class="rounded">
      <h6 class="text-title pt-3 text-sm text-slate-500 group-hover:text-slate-800 duration-200 ease">Terjual 300 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
      <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Sepatu Nike</h1>
      <h2 class="text-slate-600 pt-2 ">Rp.<span class="line-through text-slate-300 font-light"> 150.000</span> 100.000</h2>
    </a>
    <a href="" class="card rounded group">
      <img src="/img/produk2.jpg" class="rounded">
      <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 3 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 3.5</span></h6>
      <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Baju Kameja</h1>
      <h2 class="text-slate-600 pt-2 ">Rp. 80.000</h2>
    </a>
    <a href="" class="card rounded group">
      <img src="/img/produk3.jpg" class="rounded">
      <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 0</span></h6>
      <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Celana Jeans</h1>
      <h2 class="text-slate-600 pt-2 ">Rp. 80.000</h2>
    </a>
    <a href="" class="card rounded group">
      <img src="/img/produk4.jpg" class="rounded">
      <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease ">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
      <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Topi Koboy</h1>
      <h2 class="text-slate-600 pt-2 ">Rp. 80.000</h2>
    </a>
  </div>
</div>
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-14 py-5 product flex justify-center">
  <a href="" class="mt-5">
    <button class="bg-gray-600 text-gray-100 py-3 px-7 rounded mt-7 hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Lihat Semua</button>
  </a>
</div>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-20 py-5 product">
  <h1 class="text-center text-xl font-medium text-slate-700">Tertimoni</h1>
  <p class="text-slate-500 text-center pt-3">Berikut beberapa orang terpilih yang memberikan testimoni</p>
  <div class="splide w-full mt-5">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide flex justify-between flex-col">
          <div class="p-3">
            <h1 class="text-slate-500 text-xl"><i class="bi bi-chat-right-quote"></i></h1>
            <h2 class="text-xs pt-3 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sapiente.</h2>
          </div>
          <div class="flex justify-end">
            <div class="flex items-center">
              <h1 class="text-slate-700 text-sm pe-5">Saripuddin</h1>
            </div>
            <img src="{{ asset('img/orang1.jpg') }}" alt="">
          </div>
        </li>
        <li class="splide__slide flex justify-between flex-col">
          <div class="p-3">
            <h1 class="text-slate-500 text-xl"><i class="bi bi-chat-right-quote"></i></h1>
            <h2 class="text-xs pt-3 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sapiente. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h2>
          </div>
          <div class="flex justify-end">
            <div class="flex items-center">
              <h1 class="text-slate-700 text-sm pe-5">Fajar Sadboy</h1>
            </div>
            <img src="{{ asset('img/orang2.jpg') }}" alt="">
          </div>
        </li>
        <li class="splide__slide flex justify-between flex-col">
          <div class="p-3">
            <h1 class="text-slate-500 text-xl"><i class="bi bi-chat-right-quote"></i></h1>
            <h2 class="text-xs pt-3 text-slate-500">Lorem ipsum dolor sit amet Lorem, ipsum dolor. consectetur adipisicing elit. Dicta, sapiente. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h2>
          </div>
          <div class="flex justify-end">
            <div class="flex items-center">
              <h1 class="text-slate-700 text-sm pe-5">Dg Nompo</h1>
            </div>
            <img src="{{ asset('img/orang3.jpg') }}" alt="">
          </div>
        </li>
        <li class="splide__slide flex justify-between flex-col">
          <div class="p-3">
            <h1 class="text-slate-500 text-xl"><i class="bi bi-chat-right-quote"></i></h1>
            <h2 class="text-xs pt-3 text-slate-500">Lorem ipsum dolor sit amet Lorem, ipsum dolor. consectetur adipisicing elit. Dicta, sapiente. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h2>
          </div>
          <div class="flex justify-end">
            <div class="flex items-center">
              <h1 class="text-slate-700 text-sm pe-5">I Ramang</h1>
            </div>
            <img src="{{ asset('img/orang4.jpg') }}" alt="">
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<script>
  var splide = new Splide('.splide');
  var bar = splide.root.querySelector('.my-carousel-progress-bar');

  // Updates the bar width whenever the carousel moves:
  splide.on('mounted move', function() {
    var end = splide.Components.Controller.getEnd() + 1;
    var rate = Math.min((splide.index + 1) / end, 1);
    bar.style.width = String(100 * rate) + '%';
  });

  var splide = new Splide('.splide', {
    type: 'loop',
    perPage: 3,
    autoplay: true,
  });

  splide.mount();

  splide.mount();
</script>

@endsection