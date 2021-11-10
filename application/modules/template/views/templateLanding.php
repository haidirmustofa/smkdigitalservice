<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/images') ?>/smkdigitalserviceicon.png">
    <title>SMK Digital Service</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/landingpage') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage') ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/landingpage') ?>/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="<?= base_url('assets/landingpage') ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?= base_url('assets/landingpage') ?>/assets/css/owl.css">
    <style>
        @media screen and (max-width: 600px) {
            #img_hide {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
            }
        }

        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin-top: -6px;
        }
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url() ?>" class="logo">
                            <!-- <h4>SMK <span>Digital Service</span></h4> -->
                            <img src="<?= base_url('assets/images') ?>/smkdigitalservicelogo.png" alt="smkdigitalservice">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <div class="main-red-button"><a href="<?= base_url('roadmap') ?>">Roadmap</a></div>
                            <!-- <li class="scroll-to-section"><a href="<?= base_url('roadmap') ?>">Roadmap</a></li> -->
                            <!-- <li class="scroll-to-section"><a href="<?= base_url('blog') ?>">Blog</a></li> -->
                            <!-- <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                            <li class="scroll-to-section"><a href="#blog">Blog</a></li>
                            <li class="scroll-to-section"><a href="#contact">Message Us</a></li> -->
                            <li class="scroll-to-section">
                                <!-- <div class="main-red-button"><a href="#contact">Contact Now</a></div> -->
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <?= $contents ?>

    <!-- Scripts -->
    <script src="<?= base_url('assets/landingpage') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/landingpage') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/landingpage') ?>/assets/js/owl-carousel.js"></script>
    <script src="<?= base_url('assets/landingpage') ?>/assets/js/animation.js"></script>
    <script src="<?= base_url('assets/landingpage') ?>/assets/js/imagesloaded.js"></script>
    <script src="<?= base_url('assets/landingpage') ?>/assets/js/templatemo-custom.js"></script>

</body>

</html>