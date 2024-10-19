<!DOCTYPE html>
<html>

<head>
    <title>CRUD Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HOMIES STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        {{-- Route::is -> mengecek name route yang lagi diakses --}}
                        {{-- kalau name route yang ladi diakses itu welcome, kasil class active (warna teks item), kalau bukan active ga dimuncilin (warna teks abu-abu ) --}}
                        <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- pemanggilan route pada href :
                        1. path (/) 
                        2. name -> {{ route('name_routenya') }}--}}
                        <a class="nav-link {{ Route::is('medicines') ? 'active' : '' }}" href="{{ route('barangs.index') }}">Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>