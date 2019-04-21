<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Novel <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Novel Titles " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Novel List</h3>
            <?php if (empty($isi_novel)) : ?>
            <div class="alert alert-danger" role="alert">
                data not found
            </div>
            <?php endif; ?>
            <?php if($isi_novel != NULL) {?>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">TITLE</th>
                        <th class="text-center" scope="col">AUTHOR</th>
                        <th class="text-center" scope="col">IMAGES</th>
                        <th class="text-center" scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($isi_novel as $novel) : ?>
                        <td class="text-center"><?= $novel['judul']; ?></td>
                        <td class="text-center"><?= $novel['author']; ?></td>
                        <td class="text-center"><?= $novel['gambar']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>view/hapus/<?= $novel['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>Delete</a>
                            <a href="<?= base_url(); ?>view/ubah/<?= $novel['id'] ?>" class="badge badge-success float-center" ?>Edit</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>add " class="btn btn-primary">Add Novel</a>
                </div>
            </div>

        </div>
    </div>
</div>
<br><br><br><br>