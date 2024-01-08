@extends('template.owner')
@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-10">
  <div class="left-section col-span-2">
    <div class="card shadow p-5">
      <h1 class="text-slate-700 font-medium">Keranjang</h1>

      <table class="w-full mt-7">
        <tr class="border-b">
          <td class="flex items-center justify-between p-3 mt-3">
            <div>
              <h1 class="text-sm text-slate-600">Sepatu Nike</h1>
            </div>
          </td>
          <td class="">
            <button id="btn-min" class="border-2 border-slate-500 w-8 h-8 rounded-lg hover:bg-slate-500 hover:text-slate-100"><i class="bi bi-dash"></i></button>
            <input type="number" class="w-12 h-full border rounded-md text-center text-slate-500 text-sm" value="1">
            <button id="btn-plus" class="hover:border-2 bg-slate-500 text-slate-100 hover:border-slate-500 w-8 h-8 rounded-lg hover:bg-transparent hover:text-slate-600"><i class="bi bi-plus"></i></button>
          </td>
          <td>
            <h1 class="text-sm">Rp. 120.000</h1>
          </td>
        </tr>
        <tr class="border-b">
          <td class="flex items-center justify-between p-3 mt-3">
            <div>
              <h1 class="text-sm text-slate-600">Sepatu Nike</h1>
            </div>
          </td>
          <td class="">
            <button id="btn-min" class="border-2 border-slate-500 w-8 h-8 rounded-lg hover:bg-slate-500 hover:text-slate-100"><i class="bi bi-dash"></i></button>
            <input type="number" class="w-12 h-full border rounded-md text-center text-slate-500 text-sm" value="1">
            <button id="btn-plus" class="hover:border-2 bg-slate-500 text-slate-100 hover:border-slate-500 w-8 h-8 rounded-lg hover:bg-transparent hover:text-slate-600"><i class="bi bi-plus"></i></button>
          </td>
          <td>
            <h1 class="text-sm">Rp. 50.000</h1>
          </td>
        </tr>
        <tr class="border-b">
          <td class="flex items-center justify-between p-3 mt-3">
            <div>
              <h1 class="text-sm text-slate-600">Sepatu Nike</h1>
            </div>
          </td>
          <td class="">
            <button id="btn-min" class="border-2 border-slate-500 w-8 h-8 rounded-lg hover:bg-slate-500 hover:text-slate-100"><i class="bi bi-dash"></i></button>
            <input type="number" class="w-12 h-full border rounded-md text-center text-slate-500 text-sm" value="1">
            <button id="btn-plus" class="hover:border-2 bg-slate-500 text-slate-100 hover:border-slate-500 w-8 h-8 rounded-lg hover:bg-transparent hover:text-slate-600"><i class="bi bi-plus"></i></button>
          </td>
          <td>
            <h1 class="text-sm">Rp. 70.000</h1>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="right-section">
    <div class="card shadow p-5">
      <h1 class="text-center text-slate-700 font-medium">Pembayaran</h1>
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
      </table>

      <button class="bg-gray-600 text-gray-100 py-2 px-5 block w-full mt-8 rounded hover:bg-gray-700 hover:text-gray-200 duration-150 ease"><i class="bi bi-credit-card-2-front pe-2"></i> Bayar</button>
    </div>
  </div>
</div>

@endsection