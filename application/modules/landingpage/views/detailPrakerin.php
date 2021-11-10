<?php
include('modalEmail.php');
?>
<?= $this->session->flashdata('message'); ?>
<div class="min-height-200px">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Detail Kegiatan Prakerin</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <?php
                foreach ($prakerin as $data) {
                ?>
                    <div class=" text-center pd-20 card-box  text-white bg-dark">
                        <h2 style="color: white; margin-bottom: 10px;" class="font-24"><?= $data['PrakerinIndustries'] ?></h2>
                        <div class="profile-info">
                            <h2 style="color: white;" class="font-18"><?= $data['PrakerinName'] ?></h2>
                        </div>
                    </div>
                    <br>
                    <div class=" text-center pd-20 card-box text-white bg-dark">
                        <ul style="text-align: left;">
                            <li>
                                1. Silahkan klik tombol daftar yang ada di bawah
                            </li>
                            <li>
                                2. Masukan alamat E-mail aktif anda untuk mendapatkan kode prakerin
                            </li>
                            <li>
                                3. Periksa E-mail anda
                            </li>
                            <li>
                                4. Jika pesan tidak ada di Inbox ( Kotak Masuk ) , periksa di menu SPAM / JUNK
                            </li>
                        </ul>
                        <br><br>
                        <button href="#" type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#bd-example-modal-lg">Daftar</button>
                    </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="profile-timeline">
                            <ul>
                                <?php
                                foreach ($poc as $params) {
                                ?>
                                    <li>
                                        <h5 class="mb-20 h5 ">
                                            <i class="fa fa-check-square-o"></i> <?= $params['PrakerinBenefitName'] ?>
                                        </h5>
                                    </li>
                                <?php } ?>
                            </ul>
                            <hr>
                            <div class="timeline-month">
                                <h5>Skill yang akan dikembangkan</h5>
                            </div>
                            <div class="profile-timeline-list">
                                <ul>
                                    <?php
                                    foreach ($skill as $params) {
                                    ?>
                                        <li>
                                            <div style="margin-left: -90px;" class="task-name"><?= $params['PrakerinSkillName'] ?></div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <hr>
                            <br>
                            <h5 class="font-20">Deskripsi Kegiatan</h5><br>
                            <p>
                                <?= $data['PrakerinDescription'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>