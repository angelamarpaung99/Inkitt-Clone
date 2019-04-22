<body>
    <br>
    <div class="container">
        <h1 clas>Baca Novel</h1>
    </div>
    <br><br><br><br>
    <div class="container">
        <?php
            foreach ($isi_novel as $baca) { ?>
                <div class="row">
                    <div class="col-3"><img src="<?php echo base_url() ?>uploads/<?=$baca->gambar;?>" alt="" width = "200px" class="text-center m-auto" ></div>
                    <div class="col-4">
                        <h2><b><p><?=$baca->judul;?></p></b></h2>
                        <p><?=$baca->author;?></p><br>
                        <p><a href="<?php echo base_url() ?>baca/novel/<?=$baca->id;?>"><button type="button" class="btn btn-primary">Read</button></a></p><br>
                    </div>
                </div><br>
            <?php }
        ?>
    </div>
    <br><br><br><br>
</body>