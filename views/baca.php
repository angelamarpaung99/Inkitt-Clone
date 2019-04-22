<body>
    <br>
    <div class="container">
        <h1 clas>Baca Novel</h1>
    </div>
    <br><br><br><br>
    <div class="container">
        <?php
            foreach ($isi_novel as $baca) { ?>
                <div class="text-center"><img src="<?php echo base_url() ?>uploads/<?=$baca->gambar;?>" alt="" width = "200px" class="text-center m-auto" ></div><br>
                 <h2><b><p class="text-center"><?=$baca->judul;?></p></b></h2>
                 <p class="text-center"><?=$baca->author;?></p>
                 <p class="text-center"><?=$baca->tanggal;?></p>
                 <br><br>
                 <div class="container"><p class="text-center"><?=$baca->isi;?></p></div>
                 <br>
            <?php }
        ?>
    </div>
    <div class="container">
        <?php
            foreach ($komen as $komen_novel) { ?>
                <div class="text-center"><img src="<?php echo base_url() ?>uploads/<?=$baca->gambar;?>" alt="" width = "200px" class="text-center m-auto" ></div><br>
                 <h2><b><p class="text-center"><?=$komen_novel->judul;?></p></b></h2>
                 <p class="text-center"><?=$komen_novel->isi;?></p>
                 <br><br>
                 <div class="container"><p class="text-center"><?=$komen_novel->isi;?></p></div>
                 <br>
            <?php }
        ?>
    </div>
    <br><br><br><br>
</body>