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

            <div class="title">
                <p class="main_title">Daftar</p>
                <p class="sub_title">Belum punya akun? Yuk buat dulu!.</p>
            </div>

            <div class="auth_form">
                <form action="">
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Nama Depan</p>
                            <input type="text">
                        </div>
                        <div>
                            <p class="input_label">Nama Belakang</p>
                            <input type="text">
                        </div>
                    </div>
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Nomor Telepon</p>
                            <input type="text">
                        </div>
                        <div>
                            <p class="input_label">Jenis Kelamin</p>
                            <input type="text">
                        </div>
                    </div>
                    <div>
                        <p class="input_label">Email</p>
                        <input type="text">
                    </div>
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Kata Sandi</p>
                            <input type="password">
                        </div>
                        <div>
                            <p class="input_label">Konfirmasi Kata Sandi</p>
                            <input type="password">
                        </div>
                    </div>
                    <div>
                        <p class="input_label">Alamat Lengkap</p>
                        <textarea type="text"></textarea>
                    </div>
                </form>
                <a href="">
                    <div class="auth_button">
                        <p>Daftar</p>
                    </div>
                </a>
            </div>

        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
            integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
            crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    </body>
</html>
