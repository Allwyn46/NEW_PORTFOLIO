<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap-grid.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="/assets/css/plugins/font-awesome.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="/assets/css/plugins/fancybox.min.css">
    <!-- ashley scss -->
    <link rel="stylesheet" href="/assets/css/style.css">
    {{-- SCSS --}}
    <link rel="stylesheet" href="/assets/scss/style.scss">
    <!-- page name -->
    <title>Allwyn</title>

</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path
                        d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">More</div>
            <div class="mil-choose-text">Сhoose</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        @include('layout.preloader')
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->

        <!-- menu -->
        @include('layout.menu')
        <!-- menu -->

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->

        <!-- frame -->
        <div class="mil-frame">
            <div class="mil-frame-top">
                <a href="home-1.html" class="mil-logo">A.</a>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>
            <div class="mil-frame-bottom">
                <div class="mil-current-page"></div>
                <div class="mil-back-to-top">
                    <a href="#top" class="mil-link mil-dark mil-arrow-place">
                        <span>Back to top</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- frame end -->

        <!-- content -->
        @yield('main_content')
        <!-- footer -->
        @include('layout.footer')
        <!-- footer end -->
        <!-- content -->
    </div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="/assets/js/plugins/jquery.min.js"></script>
    <!-- swup js -->
    <script src="/assets/js/plugins/swup.min.js"></script>
    <!-- swiper js -->
    <script src="/assets/js/plugins/swiper.min.js"></script>
    <!-- fancybox js -->
    <script src="/assets/js/plugins/fancybox.min.js"></script>
    <!-- gsap js -->
    <script src="/assets/js/plugins/gsap.min.js"></script>
    <!-- scroll smoother -->
    <script src="/assets/js/plugins/smooth-scroll.js"></script>
    <!-- scroll trigger js -->
    <script src="/assets/js/plugins/ScrollTrigger.min.js"></script>
    <!-- scroll to js -->
    <script src="/assets/js/plugins/ScrollTo.min.js"></script>
    <!-- ashley js -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
