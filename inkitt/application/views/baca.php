<script src="<?php echo base_url('assets/Login/login.js') ?>"></script>
<body>
    <br>
    <br><br><br><br>
    <div class="container">
        <?php
            foreach ($isi_novel as $baca) { ?>
                <div class="text-center"><img src="<?php echo base_url() ?>assets/image/<?=$baca->gambar;?>" alt="" width = "200px" class="text-center m-auto" ></div><br>
                 <h2><b><p class="text-center"><?=$baca->judul;?></p></b></h2>
                 <p class="text-center"><?=$baca->Username;?></p>
                 <p class="text-center"><?=$baca->tanggal;?></p>
                 <br><br>
                 <div class="container"><p class="text-center"><?=$baca->isi;?></p></div>
                 <br>
            <?php }
        ?>
    </div>
    <br><br><br><br>
</body>