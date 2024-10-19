@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Barang</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kode Barang: {{ $barang->kode_barang }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nama Barang: {{ $barang->nama_barang }}</h6>
            <p class="card-text">Kategori: {{ $barang->kategori }}</p>
            <p class="card-text">Stok: {{ $barang->stok }}</p>
            <p class="card-text">Harga: Rp {{ number_format($barang->harga, 2) }}</p>
            <p class="card-text">Deskripsi: {{ $barang->deskripsi }}</p>
            <p class="card-text">Tanggal Pembelian: {{ $barang->tanggal_pembelian }}</p>
            <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection