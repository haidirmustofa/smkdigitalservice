<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMK Digial Service</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/styles/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landingpage/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landingpage/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landingpage/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landingpage/vendors/aos/css/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landingpage/css/style.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/landingpage/images/sdsblank.png">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/landingpage/images/sdslogo.png" alt="<?= base_url() ?>" width="220" height="45" alt="">
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="<?= base_url() ?>assets/landingpage/images/sdslogo.png" width="110" height="20" alt="">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://smkdigitalservice.com/sertifikat/">Periksa Sertifikat</a>
                        </li>
                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <a href="<?= base_url('login') ?>" class="btn btn-info">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold"><br>Daftar Lowongan PRAKERIN SMK</h1>
            <h6 class="font-weight-normal text-muted pb-3">Raih kesempatan meningkatkan kemampuan dengan terjun langsung pada ahli nya</h6>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="container px-0">
                <div class="row">
                    <?php
                    foreach ($prakerin as $params) {
                    ?>
                        <div class="col-md-4">
                            <div class="card-box pricing-card mt-30 mb-30" style="min-height: 350px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
                                <div class="pricing-card-style2 ">
                                    <img style="margin-top: -50px; width: 20%;" src="<?= base_url() ?>assets/landingpage/images/icon.png" alt="">
                                    <hr>
                                    <div class="left" style="text-align: center;">
                                        <p><b><?= $params['PrakerinIndustries'] ?></b></p>
                                        <h5><b><?= $params['PrakerinName'] ?></b></h5>
                                    </div>
                                    <hr>
                                    <div class="left" style="text-align: center;">
                                        <p>
                                            <?=
                                            str_word_count($params['PrakerinDescription']) > 20 ? substr($params['PrakerinDescription'], 0, 100) . "[..]" : $params['PrakerinDescription']
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="detail-prakerin/<?= $params['PrakerinSlug'] ?>" class="btn btn-primary btn-rounded btn-lg">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2021<a href="https://www.smkdigitalservice.com/" class="px-1">SMK Digital Service.</a>All rights reserved.</p>
                <p class="text-center text-muted pt-4">CV Educare Digital Indonesia</p>
            </footer>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/landingpage/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/landingpage/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/landingpage/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/landingpage/vendors/aos/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/landingpage/js/landingpage.js"></script>
</body>

</html>