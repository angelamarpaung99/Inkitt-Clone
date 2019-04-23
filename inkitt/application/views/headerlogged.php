<!doctype html>
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title><?php echo $judul ?></title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-dark" href="#">
        <img src="<?php echo base_url() ?>assets/inkitt-logo1.jpg"  height="20" alt="">
    </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Published Novel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-dark" href="<?php echo base_url() ?>List_Novel/listnovel/">Published Novel List</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Read Free Stories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-dark" href="#">Novel List</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
            <i class="fas fa-search" style="padding-top: 20px;"></i>
            <input class="form-control mr-sm-2 text-dark" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent; border: none; width: 90px; padding-top: 20px;">
            <i class="far fa-bell fa-lg" style="padding-top: 20px;"></i>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
                        <i class="far fa-user fa-lg" style="padding: 0 13px 0 40px;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-dark" href="<?= base_url(); ?>View/view">View Data</a>
                    </div>
                </li>
            </ul>
            <a class="text-dark" href="<?=site_url('/index.php/usercontroller/logout')?>" style="padding-top: 20px;">Logout</a>
    </form>
  </div>
</nav>