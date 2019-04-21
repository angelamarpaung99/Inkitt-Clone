<body>
    <div class="container">
        <h1 clas>Data diri</h1>
    </div>
    <div class="container">
        <img src="<?php echo base_url() ?>assets/jerry.JPG" alt="" width = "200px"><br>
        <?php
            foreach ($isi_novel as $baca) {
                echo $baca->judul;
                echo "<br>";
                echo $baca->author;
                echo "<br>";
                echo $baca->tanggal;
                echo "<br>";
                echo $baca->isi;
                echo "<br>";
            }
        ?>
    </div>
    <div class="container">
        <br><a href="<?php echo base_url() ?>DataTeman"><button type="button" class="btn btn-primary">Data Teman</button></a>
    </div>
</body>