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
                            <span id="current_no">1</span>
                            /
                            <span id="total_no">15</span>
                        </p>
                        <div id="blind_test_image"></div>
                        <input type="text" placeholder="Tulis angkanya di sini">
                        <div class="button_fill" onclick="window.location.href = '<?php echo base_url() ?>blind_test/result'">
                            <p>Submit</p>
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
        <script
            src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
            integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
            crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    </body>
</html>
