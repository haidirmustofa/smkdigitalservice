<link rel="stylesheet" href="<?= base_url('assets/roadmap/') ?>fonts/icomoon/style.css">

<link rel="stylesheet" href="<?= base_url('assets/roadmap/') ?>css/owl.carousel.min.css">

<link rel="stylesheet" href="<?= base_url('assets/roadmap/') ?>css/animate.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('assets/roadmap/') ?>css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="<?= base_url('assets/roadmap/') ?>css/style.css">
<?php
foreach ($roadmap as $data) {
?>
    <div id="roadmap" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>SMK &mdash;<span><?= $data['RoadmapName'] ?></span><br>#RoadmapToFuture</h2>
                        <p>Roadmap ini dibuat dengan tujuan untuk membantu SMK di dunia Industri.<br> Baik itu sekolah , guru maupun murid agar mengetahui dan mempersiapkan diri dengan kehalian - keahlian yang saat ini dibutuhkan oleh industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex carousel-nav">
            <a href="#" class="col active">Pendahuluan</a>
            <a href="#" class="col">Roadmap Industri</a>
            <a href="#" class="col">Penjelasan</a>
        </div>
        <div class="owl-carousel owl-1">
            <div class="d-md-flex w-100">
                <div class="text">
                    <p class="category d-block mb-4">SMK &mdash; <?= $data['RoadmapName'] ?></p>
                    <?= $data['RoadmapDescription'] ?>
                </div>
            </div>
            <div class="d-md-flex w-100">
                <div class="img">
                    <img src="<?= base_url('assets/roadmap/') ?>images/<?= $data['RoadmapImage'] ?>" alt="Image" class="img-fluid">
                </div>
            </div> <!-- .item -->

            <div class="d-md-flex w-100">
                <div class="text">
                    <?= $data['RoadmapIntroduction'] ?>
                </div>
            </div> <!-- .item -->
        </div>
    </div>
<?php } ?>
<script src="<?= base_url('assets/roadmap/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/roadmap/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/roadmap/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/roadmap/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/roadmap/') ?>js/main.js"></script>