<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Isi Data Anda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('sendEmail') ?>">
                    <div class="form-group">
                        <label>Nama lengkap anda : </label>
                        <input class="form-control" name="name" type="text">
                        <input class="form-control" value="<?= $this->uri->segment(2); ?>" hidden name="kode" type="text">
                    </div>
                    <div class="form-group">
                        <label>Masukan alamat E-mail aktif anda : </label>
                        <input class="form-control" name="email" type="email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Daftar">
            </div>
            </form>
        </div>
    </div>
</div>