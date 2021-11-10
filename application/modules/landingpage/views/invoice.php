<div class="invoice-wrap">
    <div class="invoice-box">
        <div class="invoice-header">
            <div class="logo text-center">
                <img src="vendors/images/deskapp-logo.png" alt="">
            </div>
        </div>
        <h4 class="text-center mb-30 weight-600">INVOICE</h4>
        <div class="row pb-30">
            <div class="col-md-6">
                <?php
                foreach ($prakerin as $params) {
                ?>
                    <h5 class="mb-15"><?= $params['PrakerinName'] ?></h5>
                    <h6 class="mb-15"><?= $params['PrakerinIndustries'] ?></h6>
                    <p class="font-14 mb-5">Durasi Prakerin: <strong class="weight-600"><?= $params['PrakerinDuration'] ?></strong></p>
                    <p class="font-14 mb-5">Kode Prakerin: <strong class="weight-600"><?= $params['PrakerinCode'] ?></strong></p>
            </div>
        </div>
        <div class="invoice-desc pb-30">
            <div class="invoice-desc-footer">
                <div class="invoice-desc-head clearfix">
                    <div class="invoice-sub">Bank Info</div>
                    <div class="invoice-subtotal">Total</div>
                </div>
                <div class="invoice-desc-body">
                    <ul>
                        <li class="clearfix">
                            <div class="invoice-sub">
                                <p class="font-14 mb-5"> Bank Mandiri : <strong class="weight-600">123 456 789</strong></p>
                            </div>
                            <div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">Rp.<?= number_format($params['PrakerinPrice'], 2, ',', '.') ?></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <h6>Informasi Penting</h6>
            <br>
            <p>
                <?php
                    if ($params['PrakerinPrice'] == 0) {
                ?>
                    Silahkan konfimasi dengan menunjukan kode berikut <br><b><?= $params['PrakerinCode'] ?></b>
                <?php
                    } else {
                ?>
                    Proses konfirmasi pembayaran akan membutuhkan waktu sekitar 20 menit (dari pesan WhatsApp dikirim). Mohon menunggu dengan sabar dan terima kasih.
                <?php
                    }
                ?>
                <br><br>
            <h6>
                Butuh bantuan? hubungi kami
            </h6>
            Admin Finna<br>
            No. WhatsApp +6285161431605
            </p>
        </div>
        <h4 class="text-center pb-20">Terima Kasih</h4>
        <a href="https://wa.me/+6285161431605" target="blank" type="button" class="btn btn-success btn-lg btn-block">Konfimasi Pembayaran</a>
        <!-- <a href="#" onClick="confirm_modal('hapus.php?&id_file=<?php echo  $params['PrakerinCode']; ?>');"><button class="btn btn-danger btn-xs" title="Hapus">Hapus</button></a> -->
    </div>
<?php } ?>
</div>
<!-- <div class="modal fade" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
            </div>

            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function confirm_modal(delete_url) {
        $('#modal_delete').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script> -->