<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Add Books to Database
                </div>
                <div class="card-body">
                    <form action="<?php base_url() ?>view/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                            <small class="form-text text-danger"><?= form_error('title') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="auth">Author</label>
                            <input type="text" class="form-control" id="auth" name="auth">
                            <small class="form-text text-danger"><?= form_error('auth') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Images</label><br>
                            <input type="file" name="images" size="20" />
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                            <small class="form-text text-danger"><?= form_error('content') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Add</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<br><br><br><br>