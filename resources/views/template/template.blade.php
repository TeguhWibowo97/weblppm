<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">LPPM UDINUS</a>
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
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink"
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
                        <a class="nav-link text-light" href="#">Kontak</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="#">Statistik</a>
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
    		<div class="col-sm-12 mt-3 text-center">
    			<p>Copyright © 2020 LPPM UDINUS | All
    				rights reserved</p>
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
