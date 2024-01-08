@extends('template.owner')
@section('content')

<div class="card shadow p-5 mt-10">
  <h1 class="text-slate-700 font-medium">Transaksi</h1>

  <table class="w-full mt-7">
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <a href="/transactions/TR23910" class="group">
          <div>
            <h1 class="text-sm text-slate-600 group-hover:text-slate-900 font-semibold">TR23910</h1>
            <h3 class="text-xs text-slate-500 group-hover:text-slate-900">x2 - 03/01/2024 <span class="text-orange-400">Sedang di proses</span></h3>
          </div>
        </a>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 120.000</h1>
      </td>
    </tr>
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <a href="/transactions/TR23909" class="group">
          <div>
            <h1 class="text-sm text-slate-600 group-hover:text-slate-900 font-semibold pb-2">TR23909</h1>
            <h3 class="text-xs text-slate-500 group-hover:text-slate-900">x1 - 01/01/2024 - <span class="text-green-400">Berhasil</span></h3>
          </div>
        </a>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 120.000</h1>
      </td>
    </tr>
    <tr class="border-b">
      <td class="flex items-center justify-between p-3 mt-3">
        <a href="/transactions/TR23908" class="group">
          <div>
            <h1 class="text-sm text-slate-600 group-hover:text-slate-900 font-semibold pb-2">TR23908</h1>
            <h3 class="text-xs text-slate-500 group-hover:text-slate-900">x1 - 31/12/2023 - <span class="text-red-400">Gagal</span></h3>
          </div>
        </a>
      </td>
      <td>
        <h1 class="text-sm text-end">Rp. 120.000</h1>
      </td>
    </tr>
  </table>
</div>

@endsection