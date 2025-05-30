<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'PT Lematang')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Construction Company Website Template">
    <meta name="description" content="Construction Company Website Template">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/halamanguess.js') }}" defer></script>

</head>

<body>
    <div class="wrapper">

        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('img/ptlematang nobg.png') }}" alt="PT Lematang" width="250">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon"><i class="flaticon-calendar"></i></div>
                                    <div class="top-bar-text">
                                        <h3>Jam Operasional</h3>
                                        <p>Senin - Jumat, 8:00 - 17:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon"><i class="flaticon-call"></i></div>
                                    <div class="top-bar-text">
                                        <h3>Telepon</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon"><i class="flaticon-send-mail"></i></div>
                                    <div class="top-bar-text">
                                        <h3>Email</h3>
                                        <p>ptlematang@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ url('/') }}"
                                class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                            <a href="{{ url('about') }}"
                                class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang
                                Perusahaan</a>
                            <a href="{{ url('contact') }}"
                                class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
                            <a href="{{ url('visimisi') }}"
                                class="nav-item nav-link {{ request()->is('visimisi') ? 'active' : '' }}">Visi Dan
                                Misi</a>

                            @if (Auth::check())
                                <a href="{{ url('selflearning') }}"
                                    class="nav-item nav-link {{ request()->is('selflearning') ? 'active' : '' }}">Self
                                    Learning</a>
                            @endif
                            {{-- Harus di ubah agar hanya admin saja di bagian Admin --}}
                            @if (Auth::check())
                                <a href="{{ url('admin/categories') }}"
                                    class="nav-item nav-link {{ request()->is('selflearning') ? 'active' : '' }}">Admin</a>
                            @endif




                        </div>
                        @if (!Auth::check())
                            <a href="{{ route('login') }}"
                                class="nav-item nav-link btn {{ request()->is('login') ? 'active' : '' }}">
                                Login
                            </a>
                        @endif

                        @if (Auth::check())
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="nav-item nav-link btn p-2">Logout</button>
                            </form>
                        @endif



                        <!-- Profil -->
                    </div>
                </nav>
            </div>
        </div>





        <!-- Konten Utama -->
        @yield('content')

        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact">
                            <h2>Office Contact</h2>
                            <p><i class="fa fa-map-marker-alt"></i>2Q96+4FW, Jl. Letkol Iskandar, 17 Ilir, Ilir Timur
                                I,
                                Palembang City, South Sumatra 30111</p>
                            <p><i class="fa fa-phone-alt"></i>+00000000</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Visi Dan Misi</h2>
                            <a href="">Visi</a>
                            <a href="">Misi</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="newsletter">
                            <img src="img/ptlematang nobg.png" alt="">
                            <p class="mt-3">
                                PT. Lematang adalah jasa sewa alat berat yang berada di Palembang
                            </p>
                        </div>

                    </div>
                    <div class="container copyright">
                        <div class="row">
                            <p class="text-center w-100">&copy; <a href="#">2025 Lematang</a>, All Right
                                Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/slick/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

    <!-- Template Javascript -->

</body>

</html>
