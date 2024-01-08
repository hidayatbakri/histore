@extends('template.main')
@section('content')

<!-- produk -->
<div class="mx-auto max-w-7xl px-2 lg:px-6 lg:px-8 mt-5 py-5">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">
    <div class="">
      <div class="bg-gray-200 px-5 rounded w-full mb-10 py-10">
        <h1 class="text-slate-700 font-medium text-lg">Informasi Kontak</h1>
        <ul class="mt-3">
          <li class="text-slate-500 py-1"><i class="bi bi-telephone"></i> +62-8953-8877-239</li>
          <li class="text-slate-500 py-1"><i class="bi bi-envelope"></i> histore@gmail.com</li>
          <li class="text-slate-500 py-1"><i class="bi bi-geo-alt"></i> Jl. Perintis Kemerdekaan No.100</li>
        </ul>
      </div>
    </div>
    <div class="col-span-2">
      <h1 class="text-center text-xl font-medium">Hubungi Kami</h1>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-600">Nama</label>
          <div class="mt-2">
            <input type="text" name="name" id="name" autocomplete="family-name" class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-3">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-600">Email</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="family-name" class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-600">Pesan</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="p-3 block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
      </div>
      <div class="flex justify-end mt-5">
        <a href="">
          <button class="bg-gray-600 text-gray-100 py-2 px-5 rounded hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Kirim</button>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection