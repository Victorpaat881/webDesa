<!doctype html>
<html lang="en">

<head>
    <title>Website Resmi Desa Tenga</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/dokumentasi/logo/logo.png">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- bootstrap -->
    <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/default.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/layouts.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/shortcodes.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/css/responsive-leyouts.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/smart-forms/smart-forms.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/cubeportfolio/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/et-line-font/et-line-font.css">
    <link href="<?= base_url() ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/js/quill/quill-snow.css" rel="stylesheet">



    <!-- Remove the below comments to use your color option -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/lightblue.css" /> -->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/violet.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/mossgreen.css" />-->

    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

    <div class="site_wrapper">
        <div class="topbar light topbar-padding">
            <div class="container">
                <a href="<?= base_url() ?>" class="logo two toppadd">
                    <!-- <img src="<?= base_url() ?>assets/images/logo.png" alt="Hasta Logo" /> -->
                    <h1 style="font-family:'Courier New', Courier, monospace; margin:0; font-weight:bold">DESA TENGA</h1>
                </a>
                <ul class="toplist toppadding">
                    <li>Customer Care</li>
                    <li class="lineright">(888) 123-4567</li>
                    <li class="lineright"><a href="<?= base_url('login') ?>">Login</a></li>
                    <li class="lineright"><a href="<?= base_url('register') ?>">Register</a></li>
                    <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- End of topbar -->


        <?= $this->renderSection('main') ?>

        <!--end section-->
        <div class="clearfix"></div>

        <section class="section-dark sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 clearfix">
                        <div class="item-holder">
                            <h4 class="uppercase footer-title less-mar3">Newsletter</h4>
                            <div class="clearfix"></div>
                            <div class="footer-title-bottomstrip"></div>
                            <div class="newsletter">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit et justo amet. Suspendisse et justo.</p>
                                <br />
                                <form method="get" action="index.html">
                                    <input class="email_input" name="samplees" id="samplees" value="E-mail Address" onFocus="if(this.value == 'E-mail Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'E-mail Address';}" type="text">
                                    <input name="" value="Go" class="input_submit orange2" type="submit">
                                </form>
                            </div>
                            <div class="margin-top3"></div>
                            <ul class="social-icons-3 white">
                                <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-3 clearfix">
                        <div class="item-holder">
                            <h4 class="uppercase footer-title less-mar3">Tentang Desa</h4>
                            <div class="clearfix"></div>
                            <div class="footer-title-bottomstrip"></div>
                            <ul class="usefull-links orange2">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Home</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Visi Misi Desa</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Sejarah Desa</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Fasilitas Desa</a></li>
                                <li class="last"><a href="#"><i class="fa fa-angle-right"></i> Organisasi Desa</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end item-->

                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="section-copyrights sec-moreless-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2023 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="#">Desa Tenga</a> | All rights reserved.</span>
                    </div>
                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <a href="#" class="scrollup orange2"></a><!-- end scroll to top of the page-->
    </div>


    <!-- ========== Js files ========== -->

    <script type="text/javascript" src="<?= base_url() ?>assets/js/universal/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/mainmenu/customeUI.js"></script>
    <script src="<?= base_url() ?>assets/js/mainmenu/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/js/masterslider/masterslider.min.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1600, // slider standard width
                height: 650, // slider standard height
                space: 0,
                speed: 45,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        })(jQuery);
    </script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/cubeportfolio/main.js"></script>
    <script src="<?= base_url() ?>assets/js/owl-carousel/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/js/owl-carousel/custom.js"></script>
    <script src="<?= base_url() ?>assets/js/scrolltotop/totop.js"></script>

    <script src="<?= base_url() ?>assets/js/scripts/functions.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/quill/quill.js" type="text/javascript"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>