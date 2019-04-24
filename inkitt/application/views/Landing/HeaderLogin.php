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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/headerstyle.css') ?>">
     
</head>

<body>
   <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-white " >
        <div class="container" style="max-width: 1343px;">
          <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/image/logo.png')?>" alt="inkitt logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto navigation-list mt-0">
              
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Published Novel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url() ?>List_Novel/listnovel/">Published Novel List</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Read Free Stories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Novel List</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-0">
                <li class="nav-item">
                    <button class="search_icon navigation-hoverable"><i class="fa fa-search fa-lg" aria-hidden="true"></i> Search</button>
                </li>
                <li class="navigation-actions_item"> 
                    <button onclick="showForm1()" style="width:auto;" class="js-login-signup-anchor navigation-button navigation-button_dark">sign in</button>
                </li>
                <li class="navigation-actions__item navigation-show_desktop navigation-hoverable">
                    <i class="fa fa-ellipsis-v fa-lg" aria-hidden="true"></i>
                </li>
            </ul>
        </div>
    </nav> 
</body>
</html>

