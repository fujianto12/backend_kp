<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/slick/slick.css" rel="stylesheet" />
    <link href="lib/slick/slick-theme.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/loginregis.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Background container dengan penamaan benar -->
   <div class="bg-img">
  <div class="content">
    <header>Register Form</header>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Full Name" />
      </div>
      <div class="field">
        <span class="fa fa-envelope"></span>
        <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email" />
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" name="password" class="pass-key" required placeholder="Password" />
        <span class="show" onclick="togglePassword()">SHOW</span>
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" name="password_confirmation" class="pass-key" required placeholder="Confirm Password" />
      </div>
      <div class="pass">
        <a href={{route('login')}}>Already have an account? Login</a>
      </div>
      <div class="field">
        <input type="submit" value="REGISTER" />
      </div>
    </form>
    <div class="signup">
      Or register with
    </div>
    <div class="links">
      <div class="facebook">
        <i class="fab fa-facebook-f"><span>Facebook</span></i>
      </div>
      <div class="instagram">
        <i class="fab fa-instagram"><span>Instagram</span></i>
      </div>
    </div>
  </div>
</div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/loginregis.js') }}"></script>
</body>

</html>
