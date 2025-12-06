<!doctype html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/tourx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Dec 2025 02:58:25 GMT -->

<head>
    <title>Luxury4 - Quản lý Du lịch</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo '<base href="' . (defined('BASE_URL') ? BASE_URL : '/') . '">';
    ?>
    <?php $__base = defined('BASE_URL') ? BASE_URL : '/'; ?>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $__base; ?>assets/images/favicon.png">
    <!-- wow css -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/animate.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/magnific-popup.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/boxicons.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/font/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/owl.carousel.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo $__base; ?>public/css/responsive.css">

</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader loader1">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <div class="rocket"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- =============== Topbar area start =============== -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 tob-contact-row">
                    <div class="topbar-contact">
                        <ul>
                            <li><i class='bx bxs-phone'></i><a href="tel:+84788888888">+84 788-888-888</a></li>
                            <li><i class='bx bxs-envelope'></i><a href="mailto:contact@luxury4.com">contact@luxury4.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Topbar area end =============== -->

    <!-- ===============  header area start =============== -->
    <header>
        <div class="header-area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-wrap">
                            <div class="logo d-flex justify-content-between">
                                <a href="index-2.html" class="navbar-brand"> <img src="<?php echo $__base; ?>assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="navbar-icons">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="user-dropdown-icon">
                                    <i class="flaticon-user"></i>

                                    <div class="account-dropdown">
                                        <ul>
                                            <li class="account-el">
                                                <i class='bx bx-user-pin'></i>
                                                <a href="#">Đăng nhập</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bxs-user-account'></i>
                                                <a href="#">Tài khoản của tôi</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bx-extension'></i>
                                                <a href="#">Cài đặt</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bx-log-in-circle'></i>
                                                <a href="#">Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <div class="top-search-bar m-0 d-block d-xl-none">
                                    </div>

                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <nav class="main-nav">
                            <div class="navber-logo-sm">
                                <img src="<?php echo $__base; ?>public/images/logo-2.png" alt="" class="img-fluid">
                            </div>
                            <ul>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Home</a>
                                    <i class="fl flaticon-plus">+</i>
                                </li>
                                <li><a href="about.html">Giới thiệu</a></li>
                                <li><a href="destination.html">Điểm đến</a></li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Tour</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="package.html" class="sub-item">Tour</a></li>
                                        <li><a href="package-sidebar.html" class="sub-item">Tour Nội địa</a></li>
                                        <li><a href="package-standard.html" class="sub-item">Tour Quốc tế</a></li>
                                        <li><a href="package-details.html" class="sub-item">Tour chi tiết</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Blogs</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html" class="sub-item">Blog page</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-item">Top địa điểm du lịch</a></li>
                                        <li><a href="blog-standard.html" class="sub-item">Hành lý cần thiết</a></li>
                                        <li><a href="blog-details.html" class="sub-item">Chi tiết blog</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="navbar-icons-2">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="user-dropdown-icon">
                                    <i class="flaticon-user"></i>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li class="account-el">
                                                <i class='bx bx-user-pin'></i>
                                                <a href="#">Đăng nhập</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bxs-user-account'></i>
                                                <a href="#">Tài khoản của tôi</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bx-extension'></i>
                                                <a href="#">Cài đặt</a>
                                            </li>
                                            <li class="account-el">
                                                <i class='bx bx-log-in-circle'></i>
                                                <a href="#">Đăng xuất</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-contact">
                                <ul>
                                    <li class="sidebar-single-contact"><i class='bx bxs-phone'></i> <a href="tel:+17632275032">0988.888.888</a></li>
                                    <li class="sidebar-single-contact"><i class='bx bxs-envelope'></i><a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#2940474f46694c51484459454c074a4644"><span class="__cf_email__" data-cfemail="acc5c2cac3ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <form>
                <div class="main-searchbar">
                    <div class="searchbar-close">
                        <i class='bx bx-x'></i>
                    </div>
                    <input type="text" placeholder="Search Here......">
                    <div class="searchbar-icon">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <!-- ===============  header area end =============== -->

    <!-- ===============  Main banner area start =============== -->
    <div class="main-banner">
        <div class="banner-slider owl-carousel">
            <div class="slider-item slider-item-1">
                <div class="container">
                    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h2>Tour hấp dẫn tại
                            Hampshire </h2>
                        <h5>7 Days, 8 Night Tour</h5>
                        <div class="banner-btn">
                            <a href="package.html" class="btn-common">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-2">
                <div class="container">
                    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h2>Tour hấp dẫn tại
                            Sapa </h2>
                        <h5>3 ngày, 2 đêm</h5>
                        <div class="banner-btn">
                            <a href="package.html" class="btn-common">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-3">
                <div class="container">
                    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h2>Tour hấp dẫn tại
                            Phong Nha Kẻ Bàng </h2>
                        <h5>2 ngày, 1 đêm</h5>
                        <div class="banner-btn">
                            <a href="package.html" class="btn-common">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Main banner area end =============== -->

    <!-- ===============  findfrom area start ============= -->
    <div class="find-form">
        <div class="container">
            <form class="findfrom-wrapper">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" name="whereto" placeholder="Bạn muốn đi đâu...">
                    </div>
                    <div class="col-lg-3">
                        <div class="calendar-input">
                            <input type="text" name="check-in" class="input-field check-in" placeholder="dd-mm-yy">
                            <i class="flaticon-calendar"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="custom-select">
                            <select>
                                <option value="0">Loại hình</option>
                                <option value="1">City Tours</option>
                                <option value="2">Tour nghỉ dưỡng</option>
                                <option value="3">Tour đôi</option>
                                <option value="4">Tour mạo hiểm</option>
                                <option value="5">Tour nhóm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="find-btn">
                            <a href="#" class="btn-second"><i class='bx bx-search-alt'></i> Tìm ngay</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ===============  findfrom area end =============== -->

    <!-- ===============  Package  area start =============== -->
    <div class="package-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-45">
                        <h5>Chọn gói tour</h5>
                        <h2>Tour Quốc Tế</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>1.800.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Paris Hill Tour</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>2.800.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Lake Garda, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>1.200.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Mount Dtna, Italyr</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-4.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>3.000.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Amalfi Costa, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-5.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>2.400.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">French Rivira, France</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="public/images/package/p-6.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>1.450.000đ</span>/Người</h5>
                                <h5><i class="flaticon-calendar"></i>5 ngày/6 đêm</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Lake Geneva, France</a>
                            </h3>
                            <div class="package-rating">
                                <strong><i class='bx bxs-star'></i><span>8K+</span> Đánh giá</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Package  area end =============== -->

    <!-- =============== Destinations area start =============== -->
    <div class="destinations-area pt-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-40">
                        <h5>Điểm đến phổ biến</h5>
                        <h2>Tour trong nước</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="package-slider-wrap">
                        <img src="public/images/destination/1.png" alt="" class="img-fluid" width="200px" height="200px">
                        <div class="pakage-overlay">
                            <strong>Phon Nha</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row owl-carousel destinations-1">
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/2.png" alt="" class="img-fluid" width="200px" height="200px">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>1.450.000đ</span>/Người</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Bà Là Hill Tour</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/3.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>2.400.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Hạ Long Bay</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/4.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>3.000.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Phú Quốc</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/5.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>1.200.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Đà Nẵng</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="package-slider-wrap">
                        <img src="public/images/destination/6.png" alt="" class="img-fluid">
                        <div class="pakage-overlay">
                            <strong>Đồ Sơn</strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row owl-carousel destinations-1">
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/7.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>1.450.000đ</span>/Người</h5>
                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Lăng Bác</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/8.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>2.400.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">36 Phố Phường Hà Nội</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/9.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>3.000.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Đà Lạt</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                        <div class="package-card">
                            <div class="package-thumb">
                                <img src="public/images/destination/10.png" alt="" class="img-fluid">
                            </div>
                            <div class="package-details">
                                <div class="package-info">
                                    <h5><span>1.200.000đ</span>/Người</h5>

                                </div>
                                <h3><i class="flaticon-arrival"></i>
                                    <a href="package-details.html">Quy Nhơn</a>
                                </h3>
                                <div class="package-rating">
                                    <i class='bx bxs-star'></i>
                                    <strong><span>1.3K+</span> Đánh giá</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Destinations area end =============== -->

    <!-- ===============  Newsletter area start =============== -->
    <div class="newsletter-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="newsletter-wrapper">
                        <h2>Đăng ký ngay <br>
                            Để nhận khuyến mãi mới nhất</h2>

                        <form>
                            <div class="input-group newsletter-input">
                                <input type="text" class="form-control" placeholder="Nhập Email của bạn"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-10">
                    <div class="footer-info">
                        <div class="footer-logo">
                            <img src="<?php echo $__base; ?>assets/images/logo-2.png" alt="" class="img-fluid">
                        </div>
                        <p>Những nơi bạn chưa từng đến hãy để chúng tôi giúp bạn</p>
                        <div class="footer-social-icons">
                            <h5>**Theo dõi chúng tôi:**</h5>
                            <ul>
                                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#"><i class='bx bxl-dribbble'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-7">
                            <div class="footer-links">
                                <h5 class="widget-title">**Liên hệ với chúng tôi**</h5>

                                <div class="contact-box">
                                    <span><i class="bx bx-phone"></i></span>
                                    <div>
                                        <a href="tel:+01852-1265122">0988.888.888</a>
                                        <a href="tel:+01852-1265122">0988.888.888</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-mail-send"></i></span>
                                    <a href="#">team4@gmail.com</a>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-location-plus"></i></span>
                                    <div>
                                        <a href="#">Cao đẳng FPT <br>
                                            288 Trịnh Văn Bô</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5">
                            <div class="footer-links">
                                <h5 class="widget-title">**Hỗ trợ**</h5>
                                <div class="category-list">
                                    <ul>
                                        <li><a href="contact.html">**Liên hệ**</a></li>
                                        <li><a href="about.html">**Về chúng tôi**</a></li>
                                        <li><a href="#">**Dịch vụ**</a></li>
                                        <li><a href="blog.html">**Blog của chúng tôi**</a></li>
                                        <li><a href="#">**Điều khoản và điều kiện**</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-links payment-links">
                                <h5 class="widget-title">We Accepts:</h5>
                                <div class="payment-cards">
                                    <img src="public/images/payment/payment-card-2.png" alt="" class="img-fluid">
                                    <img src="public/images/payment/payment-card-1.png" alt="" class="img-fluid">
                                    <img src="public/images/payment/payment-card-3.png" alt="" class="img-fluid">
                                    <img src="public/images/payment/payment-card-4.png" alt="" class="img-fluid">
                                    <img src="public/images/payment/payment-card-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrigth-area">
                        <p>**Bản quyền** Team 4 <a href="#">Luxury4</a> | **Thiết kế bởi** <a href="#">ASM</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ==============  Footer area end================= -->



    <!--Javascript -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/wow.min.js"></script>
    <script src="public/js/typed.js"></script>
    <!-- Custom JavaScript -->
    <script src="public/js/main.js"></script>


    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"70834e4b23964a2eaf7cf4ec0e5e9a84","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Dec 2025 02:58:25 GMT -->

</html>