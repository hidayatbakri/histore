@extends('template.main')
@section('content')

<!-- produk -->
<div class="mx-auto max-w-7xl px-2 lg:px-6 lg:px-8 mt-5 py-5 flex justify-center items-center">
  <div class="card shadow-md rounded w-96 p-5">
    <h1 class="text-slate-600 text-title font-medium text-center text-lg mb-8">Masuk</h1>

    <div class="form-group mb-3">
      <label for="email" class="text-slate-500 text-sm font-light">Email</label>
      <input type="email" name="email" class="border rounded block w-full h-9 mt-2">
    </div>
    <div class="form-group mb-3">
      <label for="password" class="text-slate-500 text-sm font-light">Password</label>
      <input type="password" name="password" class="border rounded block w-full h-9 mt-2">
    </div>
    <button class="bg-gray-600 text-gray-100 py-2 px-5 block w-full mt-8 rounded hover:bg-gray-700 hover:text-gray-200 duration-150 ease">Masuk</button>
    <h6 class="text-xs text-slate-600 my-5">Belum punya akun? klik <a href="/register" class="text-blue-500 hover:text-blue-800">disini </a> untuk daftar</h6>
  </div>
</div>

@endsection