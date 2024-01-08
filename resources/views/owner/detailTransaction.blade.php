@extends('template.owner')
@section('content')

<div class="card shadow p-5 rounded mt-5">
  <h1 class="text-slate-700 font-medium">Transaksi</h1>

  <table class="w-full mt-7">
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <div>
          <h1 class="text-sm text-slate-600">Sepatu Nike</h1>
          <h2 class="text-slate-500 text-xs">x1 - Hitam - XL</h2>
        </div>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 120.000</h1>
      </td>
    </tr>
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <div>
          <h1 class="text-sm text-slate-600">Baju kemeja</h1>
          <h2 class="text-slate-500 text-xs">x1 - Hitam - XL</h2>
        </div>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 50.000</h1>
      </td>
    </tr>
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <div>
          <h1 class="text-sm text-slate-600">Celana Jeans</h1>
          <h2 class="text-slate-500 text-xs">x1 - Hitam - XL</h2>
        </div>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 70.000</h1>
      </td>
    </tr>
  </table>
</div>

<div class="w-full sm:w-1/2 mt-10">
  <h1 class="text-slate-700 font-medium">Pembayaran</h1>
  <table class="w-full mt-10">
    <tr>
      <td>
        <h1 class="text-slate-600 text-sm">Total</h1>
      </td>
      <td>
        <h2 class="text-slate-700 text-sm text-end">Rp. 240.000</h2>
      </td>
    </tr>
    <tr>
      <td>
        <h1 class="text-slate-600 text-sm">Diskon</h1>
      </td>
      <td>
        <h2 class="text-slate-700 text-sm text-end">0%</h2>
      </td>
    </tr>
    <tr>
      <td>
        <h1 class="text-slate-600 text-sm">Total Bayar</h1>
      </td>
      <td>
        <h2 class="text-slate-700 text-sm text-end">Rp. 240.000</h2>
      </td>
    </tr>
    <tr>
      <td>
        <h1 class="text-slate-600 text-sm">Status</h1>
      </td>
      <td>
        <h2 class="text-green-400 text-sm text-end">Berhasil</h2>
      </td>
    </tr>
  </table>
</div>

@endsection