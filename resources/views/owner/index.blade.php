@extends('template.owner')
@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-10">
  <div class="left-section">
    <div class="balance bg-slate-800 rounded p-5 w-full">
      <h2 class="text-title text-slate-300 pb-1 text-sm font-light">Saldo Anda</h2>
      <h1 class="text-slate-100 pb-3 text-lg">Hidayat Bakri</h1>
      <h1 class="text-white font-bold text-2xl">Rp. 9.000.000</h1>
      <p class="text-end text-slate-300 text-xs pt-5">Tanggal : 08/01/2024</p>
    </div>

    <div class="transaction mt-10 w-full">
      <h1 class="text-slate-700 font-medium">Transaksi</h1>
      <table class="w-full mt-5">
        <tr>
          <td class="flex justify-between items-center bg-slate-100 p-3 mb-2 rounded">
            <div>
              <h1 class="font-medium text-slate-700 text-sm">Sirajuddin S</h1>
              <h2 class="text-xs text-slate-500 pt-1">TR23909 <span>01/01/2024</span></h2>
            </div>
            <h1>Rp. 240.000</h1>
          </td>
        </tr>
        <tr>
          <td class="flex justify-between items-center bg-slate-100 p-3 mb-2 rounded">
            <div>
              <h1 class="font-medium text-slate-700 text-sm">Fajar Sadboy</h1>
              <h2 class="text-xs text-slate-500 pt-1">TR23908 <span>03/01/2024</span></h2>
            </div>
            <h1>Rp. 120.000</h1>
          </td>
        </tr>

      </table>
    </div>
  </div>
  <div class="right-section col-span-2">
    <div id="chart" class="w-full"></div>
  </div>
</div>

<script>
  var options = {
    chart: {
      type: 'line',
      stacked: true
    },
    stroke: {
      curve: 'smooth',
    },
    series: [{
      name: 'Penjualan',
      data: [30, 40, 35, 50, 49, 60, 70, 91, 125, 70]
    }],
    xaxis: {
      categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999, 2000]
    }
  }

  var chart = new ApexCharts(document.querySelector("#chart"), options);

  chart.render();
</script>
@endsection