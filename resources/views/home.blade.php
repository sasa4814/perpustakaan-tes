<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    {{-- Awal Header --}}
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="../image/siput.jpg" alt="" width="30" height="24">
              </a>
            <div class="container-fluid">
                <a class="navbar-brand" href="/beranda"><b>SIPUT</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        </div>
    </header>
    {{-- Akhir Header --}}

    {{-- Awal Jumbotron --}}
    <section class="jumbotron-bg">
        <div class="jumbotron warna-bg text-white">
            <div class="container">
                <h1 class="display-4"><b>SIPUT</b></h1>
                <p class="lead">Sistem Informasi Pepustakaan</p>
            </div>
        </div>
    </section>
    {{-- Akhir Jumbotron --}}

    {{-- Awal Content --}}
    @yield('content')
    {{-- Akhir Content --}}

    {{-- Awal Footer --}}
    <footer class="mt-5">
        <h5 class="foter">Copyright 2021</h5>
    </footer>
    {{-- Akhir Footer --}}

    {{-- Java Script --}}
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>