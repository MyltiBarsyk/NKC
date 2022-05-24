{{-- Хэдер и футер --}}

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Justica - Lawyer and Attorney Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Justica - Lawyer and Attorney Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
            <script src="/js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="/css/coloring.css" rel="stylesheet" type="text/css" />
    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="topbar-noborder">
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="topbar-right">
                    <div class="topbar-right">
                        <span class="topbar-widget"><a href="/login">Login</a></span>
                        <span class="topbar-widget"><a href="/register">Register</a></span>
                        <span class="topbar-widget"><a href="#">FAQ</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="/">
                                        <img alt="" class="logo" src="images/logo-light.png" />
                                        <img alt="" class="logo-2" src="images/logo.png" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li><a href="/">Home</a>
                                        <ul>
                                            <li><a href="/">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                            <li><a href="index-3.html">Homepage 3</a></li>
                                            <li><a href="index-4.html">Homepage 4</a></li>
                                            <li><a href="index-5.html">Homepage 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/about">About</a>
                                        <ul>
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="team.html">The Team</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="practice-areas.html">Practice Areas</a>
                                        <ul>
                                            <li><a href="practice-areas.html">Practice Areas 1</a></li>
                                            <li><a href="practice-areas-2.html">Practice Areas 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/news">News</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                     <li><a href="#">Elements</a>
                                        <ul>
                                            <li><a href="accordion.html">Accordion</a></li>
                                            <li><a href="alerts.html">Alerts</a></li>
                                            <li><a href="counters.html">Counters</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="icon-set-1.html">Icon Set 1</a></li>
                                            <li><a href="modal.html">Modal</a></li>
                                            <li><a href="progress-bar.html">Progress Bar</a></li>
                                            <li><a href="tabs.html">Tabs</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- mainmenu close -->
                            </div>
                            <div class="de-flex-col">
                                <div class="h-phone md-hide"><span>Need&nbsp;Help?</span><i class="fa fa-phone"></i> 1 200 300 9000</div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        @yield('content')
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="/"><img alt="" class="img-fluid mb20" src="images/logo-light.png"></a>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="id-color mb20">Practice Areas</h5>
                        <ul class="ul-style-2">
                            <li>Corporate and M&A</li>
                            <li>Construction and Real Estate</li>
                            <li>Commercial Duspute Resolution</li>
                            <li>Employment</li>
                            <li>Banking and Finance</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h5 class="id-color">Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
                            <form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1" placeholder="enter your email" type="text" /> <a href="#" id="btn-submit"><i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    &copy; Copyright 2020 - Justica by Designesia
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/easing.js"></script>
    <script src="/js/owl.carousel.js"></script>
    {{-- <script src="/js/validation.js"></script> --}}
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/enquire.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.plugin.js"></script>
    <script src="/js/typed.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/typed.js"></script>
    <script src="/js/designesia.js"></script>
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        // revolution slider
        jQuery("#slider-revolution").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "hermes",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 20,
                    v_offset: 30,
                    space: 5,
                },

            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            responsiveLevels: [1920, 1380, 1240],
            gridwidth: [1200, 1200, 940],
            spinner: "off",
            gridheight: 700,
            disableProgressBar: "on"
        });
    });
    </script>
</body>

</html>