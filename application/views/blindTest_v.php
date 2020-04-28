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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/index.css">
    </head>
    <body>

        <div id="header">
            <div class="left_section">
                <div id="logo" style="background-image: url('<?php echo base_url() ?>assets/images/logo.svg')"></div>
            </div>
            <div class="right_section">
                <a onclick="logout()">
                    <div class="button_no_fill">
                        <p>Logout</p>
                    </div>
                </a>
                <a>
                    <div class="button_no_fill">
                        <p id="username"></p>
                    </div>
                </a>
            </div>
        </div>
        <div id="main">
            <div class="section section_blind_test">
                <div class="left_section">
                    <p class="title_blind_test">Cara kerja</p>
                    <p class="sub_title">1. Lihat angka yang terdapat pada gambar <br/>
                        2. Tuliskan angka yang kamu lihat <br/>
                        3. Kerjakan sampai selsesai <br/>
                        4. Lihat hasilnya</p>
                </div>
                <div class="right_section">
                    <div class="blind_test">
                        <p id="blind_test_no">
                            <span id="current_no">...</span>
                            /
                            <span id="total_no">...</span>
                        </p>
                        <div id="blind_test_image"></div>
                        <input type="text" placeholder="Tulis angkanya di sini" id="answer">
                        <div class="button_fill" id="next_image">
                            <p id="button_next">Lanjut</p>
                        </div>
                    </div>
                </div>
            </div>
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
        <script>
            const BASE_URL = "<?php echo base_url() ?>"
        </script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
        <script>
            $( document ).ready(() => {
                setUsername()
            })
        </script>
        <script src="<?php echo base_url() ?>assets/js/blindTest.js"></script>
    </body>
</html>
