<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/list_novelstyle.css')?>">
<body>
    <div class="bookshop">
        <header class="bookshop-hero">
            <div class="bookshop-hero__inn">
                <h1 class="bookshop-hero__title">Book Store
                </h1>
                <p class="bookshop-hero__desc">
                    Inkitt is the world’s first reader-powered book publisher. Readers can discover thousands of novels for free on our platform. We measure their engagement on those stories and then publish the high-performers.
                </p>
            </div>
        </header>
        <div class="bookshop__main">
            <div class="bookshop__col">
                <div class="bookshop-books">
                     <ul class="bookshop-books-list">
                            <?php 
                                foreach ($isi_novel as $baca) { ?>
                                    <li class="bookshop-books-list__item">
                                        <div class="bookshop-book">
                                            <div class="bookshop-book__cover">
                                                <img alt="<?= $baca->judul;?>" src="<?php echo base_url() ?>assets/image/<?=$baca->gambar;?>" style="width: 171px; height: 260px;">
                                            </div>
                                            <div class="bookshop-book__details">
                                                <header class="bookshop-book__header">
                                                    <h3 class="bookshop-book__title"><?php echo $baca->judul; ?>
                                                    </h3>
                                                    <div class="bookshop-book__author">By
                                                            <a href="#"><?=$baca->Username;?>
                                                            </a>
                                                    </div>
                                                </header>
                                                <div class="bookshop-book__desc">
                                                    <p class="bookshop-book__desc-text">Tes
                                                    </p>
                                                    <a class="bookshop-inline-expander bookshop-book__desc-expander" href="<?php echo base_url() ?>baca/novel/<?=$baca->id;?>">Read More...
                                                    </a> 
                                                </div>
                                                <div class="bookshop-book__buy">
                                                    <a class="bookshop-book__buy-btn" href="<?php echo base_url() ?>baca/novel/<?=$baca->id;?>">buy now
                                                    </a>
                                                    <span class="bookshop-book__buy-price"><?= $baca->harga;?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            <?php }
                            ?>
                    </ul>
                </div>      
            </div>
        </div>
    </div>
</body>