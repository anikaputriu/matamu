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
            <div class="section section_blind_test_result">
                <div class="result">
                    <p class="result_title">Hasil</p>
                    <div id="result_no">
                        <p>
                            <span id="correct_total">...</span>
                            /
                            <span id="total_no">...</span>
                        </p>
                    </div>
                    <table id="result_table">
                        <tr>
                            <th>Nomor</th>
                            <th>Jawaban</th>
                            <th>Keterangan</th>
                        </tr>
                    </table>
                    <p class="result_description">Hm, masih ada yang salah. Kayanya kamu perlu cek mata kamu deh.
                        Oiya bisa sambil nanya-nanya dulu ke Mumu kalo bingung ya!</p>
                    <a href="<?php echo base_url() ?>blind_test">
                        <div class="button_fill">
                            <p>Tes Kembali</p>
                        </div>
                    </a>
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
            const RESULT_ID = "<?php echo $resultId ?>"
        </script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
        <script>
            $( document ).ready(() => {
                setUsername()
            })
        </script>
        <script src="<?php echo base_url() ?>assets/js/blindTestResult.js"></script>
    </body>
</html>
