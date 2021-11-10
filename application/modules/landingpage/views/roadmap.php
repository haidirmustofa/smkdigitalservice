<div id="roadmap" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2><em>Roadmap</em> Keahlian Jurusan-Jurusan SMK <span>Berdasarkan kebutuhan dunia kerja</span><br>#RoadmapToFuture</h2>
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