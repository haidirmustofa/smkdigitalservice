<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Monitoring Worklog Karyawan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/LEN.png">
    <!-- Google Fonts
		============================================ -->
    <link href="<?= base_url() ?>/assets/worklog/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/worklog/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesome-free/css/all.min.css">

    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url() ?>/assets/worklog/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<div class="error-page-area">
    <div class="error-page-wrap">
        <i class="notika-icon notika-close"></i>
        <h2>ERROR <span class="counter">404</span></h2>
        <p>Maaf, Terjadi Kesalahan.</p>
        <a href="<?= base_url('welcome') ?>" class="btn">Kembali ke Dashboard</a>
    </div>
</div>
<br>
<br>
<!-- Inbox area End-->
<div class="footer-copyright-area" style="bottom: 0px; position:fixed ; min-width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright MKOP © 2021
                        . All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer area-->
<!-- jquery
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/counterup/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/counterup/waypoints.min.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/flot/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/flot/flot-active.js"></script>
<!-- knob JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/knob/jquery.knob.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/knob/jquery.appear.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/knob/knob-active.js"></script>
<!--  wave JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/wave/waves.min.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/wave/wave-active.js"></script>
<!-- icheck JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/icheck/icheck.min.js"></script>
<script src="<?= base_url() ?>/assets/worklog/js/icheck/icheck-active.js"></script>
<!--  Chat JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/chat/jquery.chat.js"></script>
<!--  todo JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/todo/jquery.todo.js"></script>
<!-- plugins JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="<?= base_url() ?>/assets/worklog/js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<!-- <script src="<?= base_url() ?>/assets/worklog/js/tawk-chat.js"></script> -->
</body>