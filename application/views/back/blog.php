<?php $this->load->view('back/include/header'); ?>
<div class="row">
    <div class="col-6">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Blog Ekleyin</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/blogpost/') ?>" method="post">
                    <div class="form-group mb-3">
                        <label>Blog Başlık</label>
                        <input type="text" name="baslik" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Blog Yazar</label>
                        <input type="text" name="yazar" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Blog Metin</label>
                        <textarea name="aciklama" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Eklenen Bloglar</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Yazar</th>
                        <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $say = 1; foreach($bloglar as $row) { ?>
                        <tr>
                            <td><?= $say ?></td>
                            <td><?= $row->baslik ?></td>
                            <td><?= $row->tarih ?></td>
                            <td><?= $row->yazar ?></td>
                            <td><a href="<?= base_url('admin/blogsil/').$row->id ?>">Sil</a></td>
                        </tr>
                        <?php $say++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('back/include/footer'); ?>