<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Matamu</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/index.css">
    </head>
    <body>

        <div id="header">
            <div class="left_section">
                <div id="logo" style="background-image: url('<?php echo base_url() ?>assets/images/logo.svg')"></div>
            </div>
            <div class="right_section">
                <a href="<?php echo base_url() ?>signup">
                    <div class="button_no_fill">
                        <p>Daftar</p>
                    </div>
                </a>
                <a href="<?php echo base_url() ?>signin">
                    <div class="button_fill">
                        <p>Masuk</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="main">
            <div class="section section_banner"></div>

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
                        <p class="main_title">Tanya Bot</p>
                        <p class="sub_title">24/7 banget dalam menjawab pertanyaan kamu seputar mata</p>
                    </div>
                </div>
            </div>

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
            </div>

            <div class="section section_ask_bot"></div>
        </div>
        <div id="footer">
            <div class="footer_section">
                <div class="left_section">
                    <div class="logo">
                        <div class="logo_imager"></div>
                        <div class="logo_text"></div>
                    </div>


                    <div class="">

                    </div>
                    <p>test</p>
                </div>
                <div class="right_section">
                    <p>test</p>
                </div>
            </div>
            <p>Copyright 2020 Mata.mu . All Rights Reserved</p>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
            integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
            crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    </body>
</html>
