<!doctype html>
<html lang="ja" class="no-js">
<!-- Head -->

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="UTF-8">

    <!-- BootStrap Description -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="static/assets/vendors/bootstrap/css/bootstrap.min.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="static/assets/vendors/font-awesome/css/fontawesome-all.min.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="static/assets/css/styles.css">
</head>

<body id="js-home">
    <!-- Header -->
    <header role="header">
        <!-- Navbar -->
        <nav class="@yield('scroll') navbar fixed-top navbar-expand-lg navbar-transparent navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <h4>HamakkoWebBanner</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo"
                    aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a href="/seo" class="nav-link" href="/seo">
                                <i class="fas fa-eye u-font-size-90 mr-1"></i> SEO対策/アフィリエイト研究
                            </a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="/community">
                                <i class="fas fa-chalkboard-teacher u-font-size-90 mr-1"></i> グループチャット機能
                            </a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="/article">
                                <i class="fas fa-book u-font-size-90 mr-1"></i> 記事閲覧機能
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-primary" href="https://htmlstream.com/templates/stream-ui-kit">
                            <i class="fas fa-check-circle mr-1"></i> ログイン
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

    <!-- promotion -->
    @yield('promotion')
    </header>
    <!-- End Header -->

    @yield('main_contents')

    <!-- Footer -->
    <footer class="bg-dark u-content-space-top pb-4" role="footer">
        <div class="container-fluid">
            <div class="px-md-3">
                <!-- Social Sharing -->
                <div class="text-center">
                    <h2 class="h5 font-weight-light text-white mb-4">共通フッターエリアです。他ページ（機能）もインポートしてください。</h2>

                    <div class="d-flex justify-content-center">
                    </div>
                </div>
                <!-- End Social Sharing -->

                <hr class="u-opacity-1 mb-4">
            </div>

            <!-- Copyright and Social Icons -->
            <div class="row px-md-3">
                <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                    <small class="text-white">&copy; 2018 <a class="text-white"
                            href="https://htmlstream.com">Htmlstream</a>. All Rights Reserved.</small>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a class="text-white" target="_blank" href="https://www.facebook.com/htmlstream">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                            <a class="text-white" target="_blank" href="https://www.instagram.com/a_n_o2mass">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a class="text-white" target="_blank" href="https://twitter.com/aNo2mass">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Copyright and Social Icons -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="static/assets/vendors/jquery.min.js"></script>
    <script src="static/assets/vendors/jquery.migrate.min.js"></script>
    <script src="static/assets/vendors/popper.min.js"></script>
    <script src="static/assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Vendor  -->
    <script src="static/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="static/assets/vendors/jquery.parallax.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="static/assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="static/assets/js/vendors/parallax.js"></script>
    <!-- END JAVASCRIPTS -->
</body>

</html>
