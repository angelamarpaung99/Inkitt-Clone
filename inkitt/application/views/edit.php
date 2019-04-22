<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Edit Books
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $id_novel ?>" name="id">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value=<?= $isi_novel['judul'] ?>>
                            <small class="form-text text-danger"><?= form_error('title') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="auth">Author</label>
                            <input type="text" class="form-control" id="Username" name="Username" value=<?= $isi_novel['Username'] ?>>
                            <small class="form-text text-danger"><?= form_error('Username') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3"><?= $isi_novel['isi'] ?></textarea>
                            <small class="form-text text-danger"><?= form_error('content') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="auth">Price</label>
                            <input type="text" class="form-control" id="harga" name="harga" value=<?= $isi_novel['harga'] ?>>
                            <small class="form-text text-danger"><?= form_error('auth') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Change</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<br><br><br><br>