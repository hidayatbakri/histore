@extends('template.main')
@section('content')
<style>
  .product .card {
    width: 100%;
    height: 200px;
    background-color: gray;
    margin-bottom: 100px;
  }
</style>

<!-- produk -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-5 py-5 product">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-10">
    <div>
      <div class="bg-gray-200 p-3 rounded fixed w-64">
        <h1 class="text-slate-700 font-medium">Kategori</h1>
        <ul class="mt-3">
          <li><a class="text-sm text-slate-600 hover:text-slate-900" href="#">Sepatu</a></li>
          <li><a class="text-sm text-slate-600 hover:text-slate-900" href="#">Baju</a></li>
          <li><a class="text-sm text-slate-600 hover:text-slate-900" href="#">Celana</a></li>
          <li><a class="text-sm text-slate-600 hover:text-slate-900" href="#">Topi</a></li>
        </ul>
        <h1 class="text-slate-700 font-medium mt-4">Lainnya</h1>
        <ul class="mt-3">
          <li><a class="text-sm text-slate-600 hover:text-slate-900" href="#">Diskon</a></li>
        </ul>
      </div>
    </div>
    <div class="col-span-2">
      <h1 class="text-center text-xl font-medium text-slate-700">Daftar Produk</h1>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-5">
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk1.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-500 group-hover:text-slate-800 duration-200 ease">Terjual 300 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Sepatu Nike</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp.<span class="line-through text-slate-300 font-light"> 150.000</span> 100.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk2.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 3 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 3.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Baju Kameja</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk3.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 0</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Celana Jeans</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk4.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease ">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Topi Koboy</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk4.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease ">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Topi Koboy</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk3.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 0</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Celana Jeans</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk1.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-500 group-hover:text-slate-800 duration-200 ease">Terjual 300 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Sepatu Nike</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp.<span class="line-through text-slate-300 font-light"> 150.000</span> 100.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk2.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 3 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 3.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Baju Kameja</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk1.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-500 group-hover:text-slate-800 duration-200 ease">Terjual 300 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Sepatu Nike</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp.<span class="line-through text-slate-300 font-light"> 150.000</span> 100.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk2.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 3 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 3.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Baju Kameja</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk3.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 0</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Celana Jeans</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
        <a href="/product/1" class="card rounded group">
          <img src="/img/produk4.jpg" class="rounded">
          <h6 class="text-title pt-3 text-sm text-slate-600 group-hover:text-slate-800 duration-200 ease ">Terjual 0 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
          <h1 class="text-slate-600 text-lg text-title font-medium group-hover:text-slate-800 duration-200 ease">Topi Koboy</h1>
          <h2 class="text-slate-600 pt-2 text-sm ">Rp. 80.000</h2>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection