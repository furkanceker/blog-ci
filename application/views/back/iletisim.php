<?php $this->load->view('back/include/header'); ?>
<div class="row">
    <div class="col-12">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Gelen Mesajlar</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">İsim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Mesaj</th>
                        <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $say = 1; foreach($iletisimler as $row) { ?>
                        <tr>
                            <td><?= $say ?></td>
                            <td><?= $row->isim ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->telefon ?></td>
                            <td><?= $row->mesaj ?></td>
                            <td><a href="<?= base_url('admin/mesajsil/').$row->id ?>">Sil</a></td>
                        </tr>
                        <?php $say++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('back/include/footer'); ?>