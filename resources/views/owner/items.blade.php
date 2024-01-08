@extends('template.owner')
@section('content')

<style>
  table th {
    font-size: 14px;
    color: #353535;
    font-weight: 600;
    height: 40px;
    font-size: 14px;
    border: 1px solid #eaeaea;
  }

  table td {
    font-size: 14px;
    border: 1px solid #eaeaea;
    height: 40px;
    color: #353535;
  }

  table img {
    object-fit: cover;
  }
</style>

<div class="card shadow p-5 rounded mt-10">
  <h1 class="mb-10 text-slate-800 font-medium">Daftar Barang</h1>
  <a href="#" class="bg-slate-700 text-slate-200 text-sm p-3 rounded hover:bg-slate-800 hover:text-slate-100">Tambah Barang</a>
  <table class="table-auto w-full mt-7" style="overflow-x: scroll !important;">
    <thead>
      <tr>
        <th width="50">No</th>
        <th>Nama</th>
        <th>Stok</th>
        <th>Berat</th>
        <th>Terjual</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">1</td>
        <td>Sepatu Nike</td>
        <td class="text-center">15</td>
        <td class="text-center">5 gr</td>
        <td class="text-center">75x</td>
        <td>
          <center>
            <img src="{{ asset('img/produk1.jpg') }}" class="w-14 h-14 rounded">
          </center>
        </td>
        <td width="300">
          <form action="" class="flex gap-2 justify-center" method="post">
            @csrf
            <button class="bg-gray-600 w-10 text-gray-100 py-2 rounded hover:bg-gray-700 hover:text-gray-200 duration-150 ease"><i class="bi bi-pen"></i></button>
            <button class="bg-sky-600 w-10 text-gray-100 py-2 rounded hover:bg-sky-700 hover:text-gray-200 duration-150 ease"><i class="bi bi-plus"></i></button>
            <button class="bg-red-600 w-10 text-gray-100 py-2 rounded hover:bg-red-700 hover:text-gray-200 duration-150 ease"><i class="bi bi-trash"></i></button>
          </form>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection