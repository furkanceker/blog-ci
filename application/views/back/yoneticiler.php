<?php $this->load->view('back/include/header'); ?>
<div class="row">
    <div class="col-4">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Yönetici Ekleyin</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/yoneticipost/') ?>" method="post">
                    <div class="form-group mb-3">
                        <label>Yönetici Adı</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Yönetici Mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Yönetici Şifre</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">İsim</th>
                <th scope="col">Email</th>
                <th scope="col">İşlem</th>
                </tr>
            </thead>
            <tbody>
                <?php $say = 1; foreach($adminler as $admin) { ?>
                <tr>
                    <td><?= $say ?></td>
                    <td><?= $admin->name ?></td>
                    <td><?= $admin->email ?></td>
                    <td><a href="<?= base_url('admin/yoneticisil/').$admin->id ?>">Sil</a></td>
                </tr>
                <?php $say++; } ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->load->view('back/include/footer'); ?>