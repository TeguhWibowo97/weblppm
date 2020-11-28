<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- chartJS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="{{url('')}}"> 
                <img src="assetAdmin/foto/logoudinus.png" alt="" class="img-fluid" style="max-width:200px; height:55px;">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('sejarahsingkat')}}">Sejarah Singkat</a>
                            <a class="dropdown-item" href="{{url('visimisi')}}">Visi dan Misi</a>
                        </div>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="#">Arsip</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="#">Galery</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('kontak')}}">Kontak</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('statistik')}}">Statistik</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section">
        @yield('container');
    </section>

    <!-- Footer Start -->
    <footer class="bg-primary text-white p-2 mt-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>FAKULTAS</h5><hr class="bg-light col-md-4">
                    <a href="#" class="text-light">Fakultas Ilmu Komputer</a><br>
                    <a href="#" class="text-light">Fakultas Ilmu Budaya</a><br>
                    <a href="#" class="text-light">Fakultas Teknik</a><br>
                    <a href="#" class="text-light">Fakultas Kesehatan</a><br>
                    <a href="#" class="text-light">Fakultas Ekonomi dan Bisnis</a><br>
                    <a href="#" class="text-light">Pasca Sarjana</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>MANAJEMEN</h5><hr class="bg-light col-md-4">
                    <a href="#" class="text-light">Kantor Penjamin Mutu</a><br>
                    <a href="#" class="text-light">Lembaga Kerjasama</a><br>
                    <a href="#" class="text-light">Sarana dan Prasarana</a><br>
                    <a href="#" class="text-light">Career Centre</a><br>
                    <a href="#" class="text-light">Penelitian dan Pengabdian</a><br>
                    <a href="#" class="text-light">Repository</a><br>
                    <a href="#" class="text-light">Document Gateway</a><br>
                    <a href="#" class="text-light">Simlitabmas</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>AKADEMIK</h5><hr class="bg-light col-md-4">
                    <a href="#" class="text-light">SiAdin Mahasiswa</a><br>
                    <a href="#" class="text-light">SiAdin Dosen</a><br>
                    <a href="#" class="text-light">Sistem Informasi Akademik</a><br>
                    <a href="#" class="text-light">Sistem Informasi Kepegawaian</a><br>
                    <a href="#" class="text-light">Sistem Informasi Wisuda</a><br>
                    <a href="#" class="text-light">Sistem Informasi Tugas Akhir</a><br>
                    <a href="#" class="text-light">Sistem Informasi Kerja Praktek</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>FASILITAS</h5><hr class="bg-light col-md-4">
                    <a href="#" class="text-light">Mirror IKC</a><br>
                    <a href="#" class="text-light">Kulino</a><br>
                    <a href="#" class="text-light">Video Kampus</a><br>
                    <a href="#" class="text-light">TV Kampus</a><br>
                    <a href="#" class="text-light">Digital Library</a><br>
                    <a href="#" class="text-light">Poliklinik</a><br>
                    <a href="#" class="text-light">Forum Diskusi</a><br>
                    <a href="#" class="text-light">E-Gamelan</a><br>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-sm-12 mt-1 text-center">
                    <p>Copyright © 2020 LPPM UDINUS | All
                        rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
