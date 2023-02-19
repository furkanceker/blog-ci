<?php $this->load->view('back/include/header'); ?>
<div class="row">
    <div class="col-4">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Şifrenizi Değiştirin</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/sifrepost/') ?>" method="post">
                    <div class="form-group mb-3">
                        <label>Mevcut Şifre</label>
                        <input type="password" name="sifre" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Yeni Şifre</label>
                        <input type="password" name="yenisifre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('back/include/footer'); ?>