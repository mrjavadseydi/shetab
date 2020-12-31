<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>سامانه شتاب</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/line-icons.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/nivo-lightbox.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('IndexAsset')}}/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <style>
        body{
            direction: rtl;

        }
        *{
            font-family: Vazir !important;
        }
        .hero-area-2 .overlay{
            background-image:-webkit-linear-gradient(260deg, #3c96ff 0%, #2dfbff 100%);
        }
        footer .footer-Content{
            padding: 0;
        }
    </style>
</head>

<body dir="rtl">

<!-- Header Section Start -->
<header id="home" class="hero-area-2">
    <div class="overlay"></div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img style="height: 100px" src="{{asset('image/22222.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#app-features">قابلیت های سامانه </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route('login')}}">ورود به سامانه </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row space-100">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="contents">
                    <h2 class="head-title">سامانه شناسایی و تواندمندسازی استعداد های برتر <br> دانشگاه بیرحند</h2>
                    <div class="header-button">
                        <a href="{{route('login')}}" class="btn btn-border-filled">ورود به سامانه</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="intro-img">
                    <img src="{{asset('image/up.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- features Section Start -->
<div id="app-features" class="section">
    <div class="container">
        <div class="section-header">
            <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">قابلیت ها </p>
            <h2 class="section-title wow fadeIn" data-wow-delay="0.2s">تعدادی از قابلیت های سامانه شتاب</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="content-left text-right">
                    <div class="box-item left">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                        <div class="text">
                            <h4>سرعت بالا</h4>
                            <p>برای استفاده از این سامانه نیازی به مراجعه حضوری نیست و شما میتوانید حتی در خانه امتیاز کسب کنید</p>
                        </div>
                    </div>
                    <div class="box-item left">
                <span class="icon">
                  <i class="lni-dashboard"></i>
                </span>
                        <div class="text">
                            <h4>خوشه بندی</h4>
                            <p>با توجه به امتیازات ، رشته و مقطع خود در لحظه خوشه بندی شوید!</p>
                        </div>
                    </div>
                    <div class="box-item left">
                <span class="icon">
                  <i class="lni-headphone-alt"></i>
                </span>
                        <div class="text">
                            <h4>گزارش کامل</h4>
                            <p>فعالیت ها با جزییات ثبت و قابلیت گزارش گیری و خروجی از آنها وجود دارد</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="show-box">
                    <img src="img/features/app.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="content-right text-left">
                    <div class="box-item right">
                <span class="icon">
                  <i class="lni-shield"></i>
                </span>
                        <div class="text">
                            <h4>امنیت </h4>
                            <p>تمامی اطلاعات رمز گذاری میشوند و در نتیجه اطلاعات شما بطور کامل محافظت شده میباشد</p>
                        </div>
                    </div>
                    <div class="box-item right">
                <span class="icon">
                  <i class="lni-star-filled"></i>
                </span>
                        <div class="text">
                            <h4>بروز رسانی مداوم</h4>
                            <p>سامانه بطور منظم بروز رسانی میشود و از بهترین تکنولوژی های روز استفاده خواهد شد</p>
                        </div>
                    </div>
                    <div class="box-item right">
                <span class="icon">
                  <i class="lni-cup"></i>
                </span>
                        <div class="text">
                            <h4>ظاهری ساده</h4>
                            <p>این سامانه کاملا ساده طراحی شده و در استفاده از آن به مشکلی بر نخواهید خورد</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features Section End -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <!-- Copyright Start  -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info float-left">
                            <p>طراحی و توسعه توسط <a href="https://daneshjooyar.com" >دانشجویار</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </section>
    <!-- Footer area End -->

</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="{{asset('IndexAsset')}}/js/jquery-min.js"></script>
<script src="{{asset('IndexAsset')}}/js/popper.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/owl.carousel.js"></script>
<script src="{{asset('IndexAsset')}}/js/jquery.mixitup.js"></script>
<script src="{{asset('IndexAsset')}}/js/jquery.nav.js"></script>
<script src="{{asset('IndexAsset')}}/js/scrolling-nav.js"></script>
<script src="{{asset('IndexAsset')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/wow.js"></script>
<script src="{{asset('IndexAsset')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/nivo-lightbox.js"></script>
<script src="{{asset('IndexAsset')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/waypoints.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/form-validator.min.js"></script>
<script src="{{asset('IndexAsset')}}/js/contact-form-script.js"></script>
<script src="{{asset('IndexAsset')}}/js/main.js"></script>

</body>
</html>
