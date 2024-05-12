<?php
session_start();
if (!isset($_SESSION["username"])) {

  include 'koneksi_database.php'; ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/style2.css" />
    <title>Inventaris Login Form</title>


  </head>

  <body class="img js-fullheight" style="background-image: url(Img/bg.jpg)">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Sistem Informasi Inventaris Himatif</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">Login form</h3>
              <form name="form1" action="" method="post" class="signin-form">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit1" name="submit1" value="Login" class="form-control btn btn-primary submit px-3 ">
                    Sign In
                  </button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Remember Me
                      <input type="checkbox" checked />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff"></a>
                  </div>
                </div>
              </form>
              <p class="w-100 text-center">&mdash; Or back &mdash;</p>
              <div class="social d-flex text-center">
                <a href="index.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    if (isset($_POST["submit1"])) {

      $count = 0;
      $res = mysqli_query($link, "select * FROM users WHERE username='$_POST[username]' && password='$_POST[password]'");
      $count = mysqli_num_rows($res);

      if ($count == 0) {
    ?>
        <div class="alert alert-danger col-lg-6 col-lg-push-3" style="text-align: center">
          <strong style="color: white">Salah</strong> Username atau Password.
        </div>
      <?php
      } else {
        session_start();
        // Fetch user information from the result
        $user = mysqli_fetch_assoc($res);

        // Set session variables
        $_SESSION["nama"] = $user["nama"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"] = $user["role"];
      ?>
        <script type="text/javascript">
          window.location = "main_page.php";
        </script>
    <?php
      }
    }

    ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </div>


    </div>
  </body>

  </html>
<?php

} else {

  header("Location: main_page.php");
}
?>