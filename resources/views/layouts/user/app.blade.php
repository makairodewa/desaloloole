<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('guests/lib/animate/animate.min.css', []) }}" rel="stylesheet">
    <link href="{{ url('guests/lib/owlcarousel/assets/owl.carousel.min.css', []) }}" rel="stylesheet">
    <link href="{{ url('guests/lib/lightbox/css/lightbox.min.css', []) }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('guests/css/bootstrap.min.css', []) }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('guests/css/style.css', []) }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    @include('layouts.user.navbar')
    <!-- Navbar End -->
    <!-- Carousel Start -->
    @yield('content')
    <!-- Copyright Start -->
    @include('layouts.user.footer')
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#home" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('guests/lib/wow/wow.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/easing/easing.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/waypoints/waypoints.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/owlcarousel/owl.carousel.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/counterup/counterup.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/parallax/parallax.min.js', []) }}"></script>
    <script src="{{ url('guests/lib/lightbox/js/lightbox.min.js', []) }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('guests/js/main.js', []) }}"></script>
</body>

</html>
