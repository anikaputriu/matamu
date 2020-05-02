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
        <a class="nav-link" href="<?php echo base_url() ?>history/3">History</a>
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
        </div>
        <div id="main">

            <div class="title">
                <p class="main_title">Checkup Sekarang</p>
            </div>

            <div class="auth_form">
                <form action="" id="checkup_form">
                    <input type="hidden" value="<?php echo '28' ?>">
                    <p class="input_label">Date Submitted</p>
                    <input type="date" name="date_submitted" required>

                    <p class="input_label">Description</p>
                    <input type="text" name="description" required>
                    <button type="submit" class="auth_button">
                        <p>Simpan</p>
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
