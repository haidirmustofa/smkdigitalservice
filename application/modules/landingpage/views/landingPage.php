<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6>Selamat Datang</h6>
                            <h2>SMK <em>Digital Service</em></h2>
                            <p>Siap mendukung penuh SMK dalam meningkatkan mutu dan daya saing di dunia industri.</p>
                            <h1><span class="badge bg-primary rounded-pill">SMK BISA , SMK HEBAT</span></h1>
                        </div>
                    </div>
                    <div class="col-lg-6" id="img_hide">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <a href="">
                                <img src="<?= base_url('assets/landingpage') ?>/assets/images/bg2.png" alt="team meeting">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <hr style="border-top: 1px solid #BFBFBE;">
        </div>
    </div>
</div>
<div id="roadmap" class="our-portfolio section" style=" margin-top: -200px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2><em>Roadmap</em> Keahlian Jurusan-Jurusan SMK <span>Berdasarkan kebutuhan dunia kerja</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($roadmap as $data) {
            ?>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?= base_url('roadmap/') ?><?= $data['RoadmapSlug'] ?>">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Roadmap kebutuhan industri jurusan <?= $data['RoadmapName'] ?></h4>
                            </div>
                            <div class="showed-content" style="min-height: 300px;">
                                <img src="<?= base_url('assets/images/icon-roadmap/') ?><?= $data['RoadmapIcon'] ?>" alt="">
                                <p><?= $data['RoadmapName'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="col text-center mt-5 item wow bounceInUp">
    <div class="main-blue-button center">
        <a href="<?= base_url('roadmap') ?>">Lihat Semua Jurusan <br><i class="fas fa-angle-double-down"></i></a>
    </div>
</div>
<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" id="img_hide">
                <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">
                        <img src="<?= base_url('assets/landingpage') ?>/assets/images/about-left-image.png" alt="person graphic">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="services">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="icon">
                                    <img src="<?= base_url('assets/landingpage') ?>/assets/images/service-icon-01.png" alt="reporting">
                                </div>
                                <div class="right-text">
                                    <h4>Roadmap Keahlian yang terstruktur</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                <div class="icon">
                                    <img src="<?= base_url('assets/landingpage') ?>/assets/images/service-icon-02.png" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>Bekerjasama dengan Industri ternama di Indonesia</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                <div class="icon">
                                    <img src="<?= base_url('assets/landingpage') ?>/assets/images/service-icon-03.png" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>Sesuai Kebutuhan Dunia Industri</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                <div class="icon">
                                    <img src="<?= base_url('assets/landingpage') ?>/assets/images/service-icon-04.png" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>Di Verifikasi langsung oleh Industri</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container class=" fixed-bottom"">
        <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                <p>© 2021 SMK Digital Service.
                    <!-- <br>Design: <a rel="nofollow" href="https://smkdigitalservice.com">TemplateMo</a> -->
                </p>
            </div>
        </div>
    </div>
</footer>