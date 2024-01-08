<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sop Durian 97</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon"> 
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased">

        <!-- ======= Header ======= -->
        @include('layouts.header')
        <!-- ======= Hero ======= -->
        @yield('hero')        
      
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                <h2>@yield('title')</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>@yield('path')</li>
                </ol>
                </div>

            </div>
        </section>
        
        <!-- End Breadcrumbs -->
        <main id="main">
            @yield('content')
        </main>

        <!-- ======= Footer ======= -->
        <footer style="margin-bottom: 0px;" id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>Sop Durian 97<span>.</span></h3>
                                <p>
                                    Perum. Permata CibuburBlok C5 No.7 <br>
                                    Cileungsi, Kab. Bogor, Jawa Barat<br><br>
                                    <strong>Phone:</strong> 08121895979<br>
                                    <strong>Phone:</strong> 08128571596<br>
                                    <!-- <strong>Email:</strong> info@example.com<br> -->
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/dine_in">Dine in</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/take_away">Take Away</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://gofood.link/u/D4z94">Go-food</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://food.grab.com/id/id/restaurant/sop-durian-97-ruko-permata-cibubur-delivery/6-C2BGNTLKRLDJCJ">Grab-Food</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
                    </div>
            </div>
        </footer>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ url('assets/vendor/purecounter/purecounter.js')}}"></script>
        <script src="{{ url('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ url('assets/js/main.js')}}"></script>
    </body>
</html>
