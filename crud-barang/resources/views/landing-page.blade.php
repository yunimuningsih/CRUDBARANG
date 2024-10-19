@extends('layouts.app', ['title' => 'Landing || APOTEK'])
{{-- extends : untuk memanggil file blade biasanya untuk template, pemanggilannya : folder.file --}}

@section('content')
{{-- section : mengisi html ke yield yang ada di file extends --}}
    <h2 class="mt-3">Selamat datang di toko kami !</h2>
    <h5 class="mt-3"> Perabotan dapur baru bisa membuat hidup lebih praktis! Temukan 
        peralatan dapur paling inovatif hanya di toko online kami dan nikmati penawaran spesial 
        untuk pembelian pertama! </h5>
@endsection