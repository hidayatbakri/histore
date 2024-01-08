@extends('template.main')
@section('content')
<style>
  .product img {
    width: 90%;
    height: 450px;
    object-fit: cover;
  }

  .input-combo {
    min-width: 50px;
    /* width: 50px; */
    height: 25px;
    border: 1px solid #003049;
    padding: 0 10px;
    animation: .5s ease-in;
  }

  .input-combo.active {
    background-color: #2F2F2F;
    color: white !important;
  }

  .input-combo:hover {
    background-color: #2F2F2F;
    color: white !important;
  }

  .input-combo input {
    width: 50px;
    height: 25px;
    opacity: 0;
  }

  textarea#comment {
    border: 1px solid #eaeaea;
    width: 100%;
  }

  .comment-list {
    border-top: 1px solid #eaeaea;
    border-bottom: 1px solid #eaeaea;
  }
</style>

<!-- produk -->
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-5 py-5 product">
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">
    <div class="flex justify-center">
      <img src="{{ asset('img/produk1.jpg') }}" class="rounded">
    </div>
    <div>
      <h1 class="text-title font-medium text-slate-600 text-xl">Sepatu</h1>
      <h6 class="pt-2 text-sm text-slate-500 group-hover:text-slate-800 duration-200 ease">Terjual 300 <span><i class="bi bi-star-half text-yellow-400 ps-3"></i> 4.5</span></h6>
      <h2 class="text-title text-slate-600 mt-5">Ukuran</h2>
      <div class="input-group mt-2 flex gap-3">
        <div class="input-combo relative flex items-center justify-center rounded text-sm active">
          <h5 class=" text-xm">28</h5>
          <input type="radio" class="absolute" name="size">
        </div>
        <div class="input-combo relative flex items-center justify-center rounded text-sm ">
          <h5 class=" text-xm">29</h5>
          <input type="radio" class="absolute" name="size">
        </div>
        <div class="input-combo relative flex items-center justify-center rounded text-sm ">
          <h5 class=" text-xm">30</h5>
          <input type="radio" class="absolute" name="size">
        </div>
      </div>
      <h2 class="text-title text-slate-600 mt-5">Warna</h2>
      <div class="input-group mt-2 flex gap-3">
        <div class="input-combo relative flex items-center justify-center rounded text-sm active">
          <h5 class=" text-xm">Biru</h5>
          <input type="radio" class="absolute" name="size">
        </div>
        <div class="input-combo relative flex items-center justify-center rounded text-sm ">
          <h5 class=" text-xm">Abu-abu</h5>
          <input type="radio" class="absolute" name="size">
        </div>
      </div>
      <h2 class="text-title text-slate-600 mt-5">Deskripsi</h2>
      <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur. consectetur adipisicing elit. Deserunt, eius minus! Minima, quo officiis? Officia reiciendis error obcaecati, illo dolore neque assumenda, iste quia ipsa nesciunt beatae hic sapiente quibusdam.</p>

      <div class="flex justify-end mt-5">
        <a href="">
          <button class="bg-gray-600 text-gray-100 p-3 rounded mt-7 hover:bg-gray-700 hover:text-gray-200 duration-150 ease"><i class="bi bi-cart-plus me-4"></i> Keranjang</button>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-5 py-5 product">
  <h1 class="text-slate-600 text-title font-medium text-lg">Komentar</h1>

  <div class="comment-section">
    <textarea name="comment" id="comment" class="rounded p-3 text-slate-600 mt-3" placeholder="Tulis Komentar"></textarea>
    <div class="flex justify-end mt-5">
      <a href="">
        <button class="bg-gray-600 text-gray-100 py-2 px-5 rounded hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Kirim</button>
      </a>
    </div>
    <div class="mt-7"></div>
    <div class="comment-list py-5">
      <h3 class="text-slate-600">Sirajuddin sapan</h3>
      <p class="text-gray-400 font-light ps-3 pt-2" style="font-size: 14px !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat omnis quo neque sequi harum.</p>
    </div>
    <div class="comment-list py-5">
      <h3 class="text-slate-600">Sirajuddin sapan</h3>
      <p class="text-gray-400 font-light ps-3 pt-2" style="font-size: 14px !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat omnis quo neque sequi harum.</p>
    </div>
    <div class="comment-list py-5">
      <h3 class="text-slate-600">Sirajuddin sapan</h3>
      <p class="text-gray-400 font-light ps-3 pt-2" style="font-size: 14px !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat omnis quo neque sequi harum.</p>
    </div>
    <div class="comment-list py-5">
      <h3 class="text-slate-600">Sirajuddin sapan</h3>
      <p class="text-gray-400 font-light ps-3 pt-2" style="font-size: 14px !important;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam dolores natus maxime tempora impedit enim aliquid totam sapiente culpa deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat omnis quo neque sequi harum.</p>
    </div>
    <div class="comment-list py-5">
      <h3 class="text-slate-600">Sirajuddin sapan</h3>
      <p class="text-gray-400 font-light ps-3 pt-2" style="font-size: 14px !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus placeat omnis quo neque sequi harum.</p>
    </div>
  </div>
</div>
@endsection