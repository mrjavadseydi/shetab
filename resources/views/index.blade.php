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
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.1.0/dist/font-face.css" rel="stylesheet"
          type="text/css"/>
    <style>
        body {
            direction: rtl;

        }

        * {
            font-family: Vazir !important;
        }

        .hero-area-2 .overlay {
            background-image: -webkit-linear-gradient(260deg, #3c96ff 0%, #2dfbff 100%);
        }

        footer .footer-Content {
            padding: 0;
        }

        #app-features {
            background: #ffffff;
        }
        .hero-area-2 .contents {

            padding: 0;
            padding-top: 78px;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v5.0.1/dist/font-face.css" rel="stylesheet" >
</head>

<body dir="rtl">

<!-- Header Section Start -->
<header id="home" class="hero-area-2">
    <div class="overlay"></div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img style="height: 55px" src="{{asset('IndexAsset/img/33.png')}}"
                                                           alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#screenshots">تصاویر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#app-features">قابلیت های سامانه </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">جوایز</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route('login')}}">ورود به سامانه </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="">
        <div class="row space-100">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="contents">

                    <div class="header-button">
                        <img src="http://shetab.birjand.ac.ir/image/l2.jpg" alt="" style="width: 174%;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header Section End -->
<section id="screenshots" class="screens-shot section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">تصاویر</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('IndexAsset/img/screens/img-1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <a href="#pricing">
                    <img class="d-block w-100" src="{{asset('IndexAsset/img/screens/img-2.jpg')}}" alt="Second slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#pricing">
                    <img class="d-block w-100" src="{{asset('IndexAsset/img/screens/img-3.jpg')}}" alt="Third slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#pricing">

                    <img class="d-block w-100" src="{{asset('IndexAsset/img/screens/img-4.jpg')}}" alt="Third slide">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
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
                            <p>برای استفاده از این سامانه نیازی به مراجعه حضوری نیست و شما میتوانید حتی در خانه امتیاز
                                کسب کنید</p>
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
                    <img src="{{asset('IndexAsset/img/4006367.jpg')}}" alt="">
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
<div id="pricing" class="section pricing-section">
    <div class="container">
        <div class="section-header">
            <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s"
               style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                جوایز</p>
            <h2 class="section-title">جوایز در نظر گرفته شده ویژه دانشجویان برتر</h2>
        </div>

        <div class="row pricing-tables">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table wow fadeInLeft animated" data-wow-delay="0.2s"
                     style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-rocket"></i>
                        </div>
                        <h2>جایزه دکتر شکوهی ( آموزش )</h2>
                        <ul>
                            <li>اعتبار توان مندی آموزشی</li>
                            <li>اعتبار کار آفرینی</li>
                            <li>اعتبار مهارت افزایی</li>
                            <li>کمک هزینه شرکت درمسابقات مورد تایید گروه</li>
                        </ul>

                    </div>
                    <div class="plan-button">
                        <a href="{{route('login')}}" class="btn btn-border">شروع کنید</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table pricing-active">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-drop"></i>
                        </div>
                        <h2>جایزه دکتر گنجی ( پژوهشی )</h2>
                        <ul>
                            <li>اعتبار ارتباطات علمی</li>
                            <li> اعتبار اجرای پایان نامه کارشناسی</li>
                            <li>اعتبار مشارکت در فعالیت های نوآوری و کار آموزی</li>
                            <li> اعتبارشرکت در مجامع معتبر داخلی</li>

                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="{{route('login')}}" class="btn btn-border">شروع کنید</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <h2>جایزه دکتر معتمد نژاد ( فرهنگی )</h2>
                        <ul>
                            <li>راتبه دانشجویی</li>
                            <li> هدیه ازدواج</li>
                            <li> اعتبار برنامه ها و سفر های زیارتی و گردشگری</li>
                            <li> کمک هزینه شهریه خوابگاه</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="{{route('login')}}" class="btn btn-border">شروع کنید</a>
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
                            <p>طراحی و توسعه توسط <a href="https://daneshjooyar.com">دانشجویار</a></p>
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
<script src="{{asset('IndexAsset')}}/js/main.js"></script>


</body>
</html>
