<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon library -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

    <script type="text/javascript">
        function showForm1(){
            document.getElementById('id01').style.display='block';
            document.getElementById('form1').style.display='block';
            document.getElementById('form2').style.display='none';
        }

        function closeForm1(){
            var modal1 = document.getElementById('id01');

            modal1.style.display = 'none';

            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
            }   
        }

        function showForm2(){
            document.getElementById('id01').style.display='block'
            document.getElementById('form1').style.display='none'
            document.getElementById('form2').style.display='block'

        }

        function closeForm2(){
            var modal2 = document.getElementById('id01');

            modal2.style.display = 'none';

            window.onclick = function(event) {
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
            }   
        }
    </script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/frontpage.css') ?>">
</head>

<body>
    <?php
        if ($this->session->has_userdata('SuccessReg')) {
            $this->load->view('alerts/successregis');
        } else if ($this->session->has_userdata('FailReg')) {
            $this->load->view('alerts/failreg');
        }
    ?>
    <div id="id01" class="modal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="form1" class="login-signup-wrapper js-login-signup-signin login-signup-wrapper_show">
                    <div class="login-signup-inner">
                        <header class="login-signup__title">Sign in to Inkitt
                            <span onclick="closeForm1()" class="close" title="Close Modal">&times;</span>
                        </header>
                        <form action="<?=site_url('index.php/usercontroller/signin')?>" method="POST" class="signup-input-fields-wrapper" id="login-form">
                            <input class="signin-email" type="text" name="your_name" id="your_name" placeholder="Username" required>
                            <input id="your_pass" name="your_pass" placeholder="Password" type="password" required>
                            <button name="signin" id="signin" class="login-signup-btn login-signup-btn-dark" type="submit">Sign in
                            </button>
                            <div class="error-wrapper-small js-login-error"></div>
                        </form>
                        <a class="link-small js-login-signup-switcher" href="#">Forgot your password?
                        </a>
                        <div class="or-divider">
                            <span>Or</span>
                        </div>
                        <div class="login-signup-social">
                            <button class="login-signup-btn login-signup-btn_social login-signup-btn_facebook">
                                <i class="fab fa-facebook-f"></i>Sign in with Facebook
                            </button>
                            <button class="login-signup-btn login-signup-btn_social login-signup-btn_google">
                                <i class="fab fa-google-plus-g"></i>Sign in with Google 
                            </button>
                            <div class="error-wrapper-small js-login-social-error"></div>
                        </div>
                        <div class="login-signup-subtitle">You can also
                            <a class="js-login-signup-switcher" href="#">sign up</a>
                        </div>
                    </div>
                </div>
                <div id="form2" class="login-signup-wrapper js-login-signup-signin login-signup-wrapper_show">
                    <div class="login-signup-inner">
                        <header class="login-signup__title">Sign up with email
                            <span onclick="closeForm2()" class="close" title="Close Modal">&times;</span>
                        </header>
                        <form action="<?=site_url('index.php/usercontroller/register')?>" method="POST" class="signup-input-fields-wrapper" name="logInForm">
                            <input class="signup-email" type="email" name="email" placeholder="E-mail" id="email" required>
                            <input class="signup-username" type="text" name="name" id="name" placeholder="Pick a Username" required>
                            <input name="pass" placeholder="Password" type="password" id="pass" required>
                            <button class="login-signup-btn login-signup-btn-dark" type="submit" name="signup" id="signup">Sign up
                            </button>
                            <div class="error-wrapper-small js-login-error"></div>
                        </form>
                        <div class="login-signup-social">
                            <button class="login-signup-btn login-signup-btn_social login-signup-btn_facebook">
                                <i class="fab fa-facebook-f"></i>Sign up with Facebook
                            </button>
                            <button class="login-signup-btn login-signup-btn_social login-signup-btn_google">
                                <i class="fab fa-google-plus-g"></i>Sign up with Google 
                            </button>
                            <div class="error-wrapper-small js-login-social-error"></div>
                        </div>
                        <div class="have-an-account-subtitle login-signup-terms">By signing up on Inkitt, you agree to our
                            <a target="_blank" href="#">Terms of Service</a> and
                            <a target="_blank" href="#">Privacy Policy</a>
                        </div>
                        <div class="have-an-account-subtitle login-signup-subtitle">Have an account?
                            <a class="js-login-signup-switcher" href="#">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="frontpage">
        <section class="frontpage-section">
            <div class="frontpage-section__inn frontpage-intro">
                <div class="frontpage-section__row">
                    <div class="frontpage-section__col">
                        <div class="frontpage-section__title frontpage-section__title_small frontpage-section__title_left">The World’s #1 Reader-Powered Book Publisher     
                        </div>
                        <div class="frontpage-intro__item">
                            <div class="frontpage-intro-desc">
                                <div class="frontpage-intro-desc__icon">
                                    <i class="fas fa-book-open fa-lg"></i>
                                </div>
                                <p class="frontpage-intro-desc__text">Get free access to amazing pre-published novels from all genres, be the first to scout talented writers, and get mentioned inside the novel once the book is published.
                                </p>
                            </div>
                        </div>
                        <div class="frontpage-intro__item">
                            <div class="frontpage-intro-desc">
                                <div class="frontpage-intro-desc__icon">
                                    <i class="fab fa-pagelines fa-lg"></i>
                                </div>
                                <p class="frontpage-intro-desc__text">Share your novel with readers to get feedback, build your community, and get published by Inkitt.
                                    <a class="frontpage-link frontpage-link_inline" href="#">Learn More ...</a>
                                </p>
                            </div>
                        </div>
                        <div class="frontpage-intro__actions">
                            <button onclick="showForm2()" class="frontpage-btn frontpage-btn_primary js-login-signup-anchor">sign up</button>
                            <button class="frontpage-btn frontpage-btn_link js-how-it-works-anchor">how it works</button>
                        </div>
                    </div>
                    <div class="frontpage-section__col">
                        <div class="frontpage-phone">
                            <img class="frontpage-phone__case" src="<?php echo base_url('assets/image/phone.jpg')?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frontpage-section frontpage-section_green">
            <div class="frontpage-section__inn frontpage-app">
                <div class="frontpage-app-medias">
                    <div class="frontpage-app-medias__title">As Seen On
                    </div>
                    <ul class="frontpage-app-medias__list">
                        <li class="frontpage-app-medias__item frontpage-app-medias__item_bbc">
                            <span>
                                <img alt="As Seen on BBC" src="<?php echo base_url('assets/image/bbc.png')?>" style="width: 125px; height: 35px;">
                            </span>
                        </li>
                        <li class="frontpage-app-medias__item frontpage-app-medias__item_forbes">
                            <span>
                                <img style="width: 125px; height: 35px;"  src="<?php echo base_url('assets/image/forbes.png')?>">
                            </span>
                        </li>
                        <li class="frontpage-app-medias__item frontpage-app-medias__item_tc">
                            <span>
                                <img style="width: 246px; height: 35px;"  src="<?php echo base_url('assets/image/tc.png')?>">
                            </span>
                        </li>
                        <li class="frontpage-app-medias__item frontpage-app-medias__item_theguardian">
                            <span>
                                <img style="width: 230px; height: 40px;" src="<?php echo base_url('assets/image/tg.png')?>">
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="frontpage-section__row frontpage-app-details">
                    <div class="frontpage-section__col">
                        <div class="frontpage-phone">
                            <img class="frontpage-phone__case" src="<?php echo base_url('assets/image/phone1.png')?>">
                        </div>
                    </div>
                    <div class="frontpage-section__col">
                        <div class="frontpage-section__title frontpage-section__title_left">Read the Best Stories from Anywhere 
                        </div>
                        <p class="frontpage-app__desc">Download our mobile app and enjoy your favorite reads on the go. Whether you’re online or offline, our stories will stick with you.
                        </p>
                        <div class="frontpage-app-stores">
                            <div class="frontpage-app-stores__app">
                                <a alt="Download The Inkitt iOS App" href="https://itunes.apple.com/us/app/inkitt-free-books-fiction/id1033598731">
                                    <img class="appimg" src="<?php echo base_url('assets/image/app.png')?>">
                                </a>
                            </div>
                            <div class="frontpage-app-stores__app">
                                <a alt="Get Inkitt App on Google Play" href="https://play.google.com/store/apps/details?id=com.inkitt.android.hermione&hl=en&utm_source=website_footer&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
                                    <img class="appimg" src="<?php echo base_url('assets/image/google.png')?>">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frontpage-section">
            <div class="frontpage-section__inn frontpage-published">
                <div class="frontpage-section__row">
                    <div class="frontpage-section__col">
                        <div class="frontpage-section__title frontpage-section__title_left">Get Published with Inkitt
                        </div>
                        <div class="frontpage-published__desc">
                            <p>When you share your novel on Inkitt, we analyze the engagement of your readers and offer high-performing novels a publishing deal.
                                <a class="frontpage-link frontpage-link_inline" href="https://www.inkitt.com/writersblog/how-inkitt-publishes-your-books-from-preparation-to-promotion" title="Read about publishing process">Read more about our publishing process …
                                </a>
                            </p>
                        </div>
                        <div class="frontpage-published__badge">
                            <img style="width: 142px; height: 133.92px;" src="<?php echo base_url('assets/image/badge.png')?>" >
                        </div>
                    </div>
                    <div class="frontpage-section__col">
                        <div class="frontpage-published__slider frontpage-slider js-slider">
                            <div class="frontpage-slider__inn">
                                <ul class="frontpage-slider-slides">
                                    <li class="frontpage-slider-slides__slide frontpage-slider-slides__slide_image frontpage-slider-slides__slide_active">
                                        <img style="width: 530px; height: 366.45 px;" src="<?php echo base_url('assets/image/slides.png')?>">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frontpage-section">
            <div class="frontpage-section__inn frontpage-testimonials">
                <div class="frontpage-section__title frontpage-section__title_center">Loved by People Around the World  
                </div>
                <div class="frontpage-testimonials-slider frontpage-slider js-slider">
                    <div class="frontpage-slider__inn">
                        <ul class="frontpage-slider-slides frontpage-testimonials-list">
                            <li class="frontpage-slider-slides__slide frontpage-testimonials-list__item frontpage-slider-slides__slide_active">
                                <div class="frontpage-testimonials-feedback">
                                    <div class="frontpage-testimonials-feedback__cover">
                                        <img style="width: 90px; height: 90px;" src="<?php echo base_url('assets/image/testi1.png')?>">
                                    </div>
                                    <div class="frontpage-testimonials-feedback__text">Inkitt redefined my life and could do the same to yours. They aren’t a publishing house, they are a family. And family doesn’t give up on family. So I can guarantee you, when you become a family member. You will be shown the unending support I have been given.
                                    </div>
                                    <div class="frontpage-testimonials-feedback__name">Simone
                                    </div>
                                </div>
                            </li>
                            <li class="frontpage-testimonials-list__item frontpage-slider-slides__slide frontpage-slider-slides__slide_active">
                                <div class="frontpage-testimonials-feedback">
                                    <div class="frontpage-testimonials-feedback__cover">
                                        <img style="width: 90px; height: 90px;" src="<?php echo base_url('assets/image/testi2.png')?>">
                                    </div>
                                    <div class="frontpage-testimonials-feedback__text">It is a major encouragement to writers, it gives everyone a chance to reach a wider audience and provides an amazing support system to help writers grow.
                                    </div>
                                    <div class="frontpage-testimonials-feedback__name">Eboseremen
                                    </div>
                                </div>
                            </li>
                            <li class="frontpage-testimonials-list__item frontpage-slider-slides__slide frontpage-slider-slides__slide_active">
                                <div class="frontpage-testimonials-feedback">
                                    <div class="frontpage-testimonials-feedback__cover">
                                        <img style="width: 90px; height: 90px;" src="<?php echo base_url('assets/image/testi3.png')?>">
                                    </div>
                                    <div class="frontpage-testimonials-feedback__text">It gives me a chance to check out up and coming authors and read works ahead of publishing. Great way to discover an author who will one day be renowned.
                                    </div>
                                    <div class="frontpage-testimonials-feedback__name">paulmealie
                                    </div>
                                </div>
                            </li>
                            <li class="frontpage-testimonials-list__item frontpage-slider-slides__slide frontpage-slider-slides__slide_active">
                                <div class="frontpage-testimonials-feedback">
                                    <div class="frontpage-testimonials-feedback__cover">
                                        <img style="width: 90px; height: 90px;" src="<?php echo base_url('assets/image/testi4.png')?>">
                                    </div>
                                    <div class="frontpage-testimonials-feedback__text">It's pretty awesome to be able to read books written from people from all over the world. The app is very user friendly and I really enjoy it!
                                    </div>
                                    <div class="frontpage-testimonials-feedback__name">jonesxkatie
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="frontpage-section">
            <div class="frontpage-section__inn frontpage-books">
                <div class="frontpage-section__title frontpage-section__title_center">Latest Published Books                
                </div>
                <ul class="frontpage-books-list">
                    <?php 
                        $counter = 1;
                        foreach ($isi_novel as $baca) { 
                            if ($counter <= 4){ ?>
                                <li class="frontpage-books-list__item">
                            <div class="bookshop-book bookshop-book_vertical">
                                <div class="bookshop-book__cover">
                                    <img style="width: 270px; height: 411px;" alt="<?=$baca->judul;?>" src="<?php echo base_url() ?>assets/image/<?=$baca->gambar;?>">
                                </div>
                                <div class="bookshop-book__details">
                                    <header class="bookshop-book__header">
                                        <h3 class="bookshop-book__title">
                                            <a href="#"><?= $baca->judul; ?></a>
                                        </h3>
                                        <div class="bookshop-book__author">By
                                            <a href="#"><?= $baca->Username; ?></a>
                                        </div>
                                    </header>
                                    <div class="bookshop-book__buy">
                                        <a class="bookshop-book__buy-btn" href="<?php echo base_url() ?>baca/novel/<?=$baca->id;?>">buy now</a>
                                        <span class="bookshop-book__buy-price"><?= $baca->harga;?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>  
                            </li>
                        <?php } ?>
                        <?php } ?>       
                </ul>
                <div class="frontpage-books__footer">
                    <a class="frontpage-link frontpage-link_arrow-right" href="#">See All Books in Our Book Store
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>

