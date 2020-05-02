<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
    <head>
        <script>
            if(localStorage.getItem("token")){
                window.location.href = "<?php echo base_url() ?>";
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
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>signup">Daftar</a>
      </li><li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>signin">Masuk</a>
      </li>
    </ul>
  </div>
</nav>
        <div id="main">

            <div class="title">
                <p class="main_title">Daftar</p>
                <p class="sub_title">Belum punya akun? Yuk buat dulu!.</p>
            </div>

            <div class="auth_form">
                <form action="" id="signup_form">
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Nama Depan</p>
                            <input type="text" name="firstName" required>
                        </div>
                        <div>
                            <p class="input_label">Nama Belakang</p>
                            <input type="text" name="lastName" required>
                        </div>
                    </div>
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Nomor Telepon</p>
                            <input type="text" name="phoneNumber" required>
                        </div>
                        <div>
                            <p class="input_label">Jenis Kelamin</p>
                            <select name="gender" required>
                                <option value="male">Laki - Laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p class="input_label">Email</p>
                        <input type="text" name="email" required>
                    </div>
                    <div class="input_dual">
                        <div>
                            <p class="input_label">Kata Sandi</p>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <p class="input_label">Konfirmasi Kata Sandi</p>
                            <input type="password" name="confirmPassword" required>
                        </div>
                    </div>
                    <div>
                        <p class="input_label">Alamat Lengkap</p>
                        <textarea type="text" name="address" required></textarea>
                    </div>
                    <button type="submit" class="auth_button">
                        <p>Daftar</p>
                    </button>
                </form>
            </div>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script>
            const BASE_URL = "<?php echo base_url() ?>"
        </script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    </body>
</html>
