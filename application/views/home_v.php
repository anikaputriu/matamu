<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
    <head>
        <script>
            if(localStorage.getItem("token") === null){
                window.location.href = "<?php echo base_url() ?>signin";
            }
        </script>
        <title>Matamu</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/index.css">
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url() ?>"><div id="logo" style="background-image: url('<?php echo base_url() ?>assets/images/logo.svg')"></div></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>">Test Mata</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>blind_test/results">History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>checkup">Checkup</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link"><p id="username"></p></a>
      </li>
      </li><li class="nav-item">
        <a onclick="logout()" class="nav-link">Logout</a>
      </li>
    </ul>
  </div>
</nav>
        <div id="main">
            <div class="section section_banner">
                <div class="left_section">
                    <p class="title_banner">Tes Mata</p>
                    <p class="sub_title">Jalan-jalan bareng doi ke Braga</br>
                        Pulangnya mampir beli jamu</p>
                    <p class="sub_title">Jalan-jalan bareng doi ke Braga</br>
                        Pulangnya mampir beli jamu</p>
                    <a href="<?php echo base_url() ?>blind_test" onclick="return confirm('Udah siap?, berisikan 10 soal untuk mengetest rabun mata');">
                        <div class="button_fill">
                            <p>Mulai</p>
                        </div>
                    </a>
                </div>
                <div class="right_section">
                    <div class="banner">
                        <div class="banner_image">
                            <div class="image_bg"></div>
                            <div class="image">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/banner_image_1.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/banner_image_2.jpeg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/banner_image_3.jpeg" alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section_feature">
                <div class="section_title">
                    <p class="main_title">Fitur</p>
                    <p class="sub_title">Tututu bunyi tukang kue putu<br/>
                        Hm, ada apa aja ya di Mata.mu?</p>
                </div>
                <div class="features">
                    <div class="feature">
                        <div class="feature_logo" style="background-image: url('<?php echo base_url() ?>assets/images/feature_blind_test_logo.svg')"></div>
                        <p class="main_title">Tes Mata</p>
                        <p class="sub_title">Dengan Mata.mu kamu bisa mengecek kesehatan mata kamu</p>
                    </div>
                    <div class="feature">
                        <div class="feature_logo" style="background-image: url('<?php echo base_url() ?>assets/images/feature_article_logo.svg')"></div>
                        <p class="main_title">Artikel</p>
                        <p class="sub_title">Berisikan banyak artikel seputar kesehatan mata</p>
                    </div>
                    <div class="feature">
                        <div class="feature_logo" style="background-image: url('<?php echo base_url() ?>assets/images/feature_ask_bot_logo.svg')"></div>
                        <p class="main_title">Checkup</p>
                        <p class="sub_title">Mu;ai peduli dengan riwayat kesehatan mata kamu</p>
                    </div>
                </div>
            </div>
<!-- 
            <div class="section section_article">
                <div class="section_title">
                    <p class="main_title">Artikel</p>
                    <p class="sub_title">Niat ketemu kamu tapi aku malu-malu,<br/>
                        Baca artikel yuk biar bisa nambah ilmu.
                </div>
                <div class="articles">
                    <div class="article">
                        <div class="thumbnail" style="background-image: url('<?php echo base_url() ?>assets/images/thumbnail.svg')"></div>
                        <div class="main">
                            <p class="title">6 Jenis Penyakit Mata yang Wajib Kamu Tau!</p>
                            <p class="content">Mata merupakan salah satu panca indera yang membantu untuk melihat. Tentu saja mata menjadi salah satu bagian tubuh yang penting bagi kehidupan manusia.</p>
                        </div>
                    </div>
                    <div class="article">
                        <div class="thumbnail" style="background-image: url('<?php echo base_url() ?>assets/images/thumbnail.svg')"></div>
                        <div class="main">
                            <p class="title">6 Jenis Penyakit Mata yang Wajib Kamu Tau!</p>
                            <p class="content">Mata merupakan salah satu panca indera yang membantu untuk melihat. Tentu saja mata menjadi salah satu bagian tubuh yang penting bagi kehidupan manusia.</p>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="button_fill">
                        <p>Lainya</p>
                    </div>
                </a>
            </div> -->

<!--            <div class="section section_ask_bot"></div>-->
        </div>
        <div id="footer">
            <div class="footer_section">
                <div class="left_section">
                    <div class="logo">
                        <div class="logo_image" style="background-image: url('<?php echo base_url() ?>assets/images/logo_footer.svg')"></div>
                        <div class="logo_text">Mata.mu</div>
                    </div>
                    <p>Selalu Peduli denganmu</p>
                </div>
                <div class="right_section">
                    <div class="footer_main">
                        <div>
                            <p class="title">Menu</p>
                            <a href="">Tes Mata</a>
                            <a href="">Artikel</a>
                            <a href="">Tanya Bot</a>
                        </div>
                        <div>
                            <p class="title">Tentang</p>
                            <a href="">Tentang Mata.mu</a>
                            <a href="">FAQ</a>
                        </div>
                        <div>
                            <p class="title">Tentang</p>
                            <a href="">Tentang Mata.mu</a>
                            <a href="">FAQ</a>
                        </div>
                        <div>
                            <p class="title">Kontak Kami</p>
                            <a href="">081487457836</a>
                            <a href="">matam.mu@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Copyright 2020 Mata.mu . All Rights Reserved</p>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            const BASE_URL = "<?php echo base_url() ?>"
        </script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
        <script>
            $( document ).ready(() => {
                setUsername()
            })
        </script>
    </body>
</html>
