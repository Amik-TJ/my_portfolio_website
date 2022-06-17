<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fahad Rahman Amik</title>
    <meta content="I am Fahad Rahman Amik and this portfolio website belongs to me. I have recently completed my graduation from North South University emphasizing machine leaning research" name="description">
    <meta content="Fahad Rahman Amik amiknsu@gmail.com fahad.rahman1@northsouth.edu amiktj.com" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('portfolio/assets/img/amiktj.png')}}" rel="icon">
    <link href="{{asset('portfolio/assets/img/amiktj.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS Files -->
    <link href="{{asset('portfolio/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('portfolio/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('portfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('portfolio/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('portfolio/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('portfolio/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('portfolio/assets/css/style.css')}}" rel="stylesheet">

    <!-- Academic Icon CSS File -->
    <link href="{{asset('academicons/css/academicons.min.css')}}" rel="stylesheet">
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('portfolio/assets/img/profile-img.jpg')}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{route('welcome')}}">Fahad Rahman Amik</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{\App\Helpers\Helper::MY_GOOGLE_SCHOLAR}}" target="_blank" class="github"><i class="ai ai-google-scholar "></i></a>
                <a href="{{\App\Helpers\Helper::MY_GITHUB}}" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                <a href="{{\App\Helpers\Helper::MY_LINKED_IN}}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="skype:{{\App\Helpers\Helper::MY_SKYPE}}?chat" class="google-plus"><i class="bx bxl-skype"></i></a>

                <a href="mailto:{{\App\Helpers\Helper::MY_EMAIL}}" class="email"><i class="bx bi-envelope-check-fill"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#experience" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Experience</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Fahad Rahman Amik</h1>
        <p>I'm <span class="typed" data-typed-items="a Machine Learning Enthusiast, a Web Developer, a Researcher, an Educator"></span></p>
        <p>
            <a class="btn btn-lg bg-white rounded-pill"  href="{{asset('storage/all_files/CV-Fahad_Rahman_Amik.pdf')}}" download>Download CV</a></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    @include('my_portfolio.about')
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
@include('my_portfolio.resume')
<!-- End Resume Section -->


    <!-- ======= Facts Section ======= -->
    @include('my_portfolio.facts')
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    @include('my_portfolio.skills')
    <!-- End Skills Section -->



    <!-- ======= Portfolio Section ======= -->
    @include('my_portfolio.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    @include('my_portfolio.services')
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('my_portfolio.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    @include('my_portfolio.contact')
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy;  <strong><span>Amik</span></strong>
        </div>
{{--        <div class="credits">--}}
{{--           Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
{{--        </div>--}}
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('portfolio/assets/vendorvendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/typed.js/typed.min.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('portfolio/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('portfolio/assets/js/main.js')}}"></script>

</body>

</html>



