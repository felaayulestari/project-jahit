@extends('layouts.master', ['title' => 'Data Detail Pembayaran'])

@section('title', 'Data Detail Pembayaran')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Detail Pemesanan</h3>
  </div>
</div>
<div class="card">
  <div class="card-body">
   <p>Nama   : {{$pembayaran->pemesanan->pelanggan->nama_pelanggan }}</p>
   <p>Bank   : {{$pembayaran->bank }}</p>
   <p>Total  : {{$pembayaran->pemesanan->total_pemesanan }}</p>
   <p>Bukti  : </p>
   <p><img src="{{asset($pembayaran->bukti)}}"> </p>
  </div>
</div>
@endsection