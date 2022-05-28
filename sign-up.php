<?php
include 'loginSystem.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="Dashboard/assets/img/logo.png">
  <link rel="icon" type="image/png" href="Dashboard/assets/img/logo.png">
  <title>
    AnistRea
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="Dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="Dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="Dashboard/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('image/bg_sign_up.webp'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header" style="padding:0;">
                  <h4 class="font-weight-bolder" style="text-align: center;">Sign Up</h4>
                </div>
                <div class="card-body" style="padding-top:0;">
                  <form role="form" action="" method="post" style="align-items:center;">
                    <style>
                      .error {
                          background: #F2DEDE;
                          color: #A94442;
                          padding: 10px;
                          width: 95%;
                          border-radius: 5px;
                          margin: 20px auto;
                      }
                      
                      .success {
                          background: #D4EDDA;
                          color: #40754C;
                          padding: 10px;
                          width: 95%;
                          border-radius: 5px;
                          margin: 20px auto;
                      }
                    </style>
                    <?php 
                      if ( isset($_GET['error']) ){
                          echo '<p class="error" style="text-align:center;">'. $_GET["error"] .'</p>';
                      }
              
                      if ( isset($_GET['success']) ) {
                        echo '<p class="success" style="text-align:center;">'. $_GET['success'] .'You can <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign In</a> now !</p>';
                      }
                    ?>

                    <div class="input-group input-group-outline mb-2">
                      <input name="nom" placeholder="Nom" type="text" value="" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input name="prenom" placeholder="Prenom" type="text" value="" class="form-control" required>
                    </div>

                    <div class="form-check form-check-info text-start ps-0" style="margin-left: 28%;">
                      <input class="form-check-input" type="radio" name="sexe" value="male" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault" style="margin-right: 20px;">Male</label>
                      <input class="form-check-input" type="radio" name="sexe" value="female" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Female</label>
                    </div>

                    <div class="input-group input-group-outline mb-2">
                      <input name="email" placeholder="Email" type="email" value="" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-2">
                      <input name="telephone" placeholder="Telephone : +212" type="text" value="" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-2">
                      <input name="password" placeholder="Password" type="password" value="" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input name="repeatPassword" placeholder="Repeat password" type="password" value="" class="form-control" required>
                    </div>

                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="CreateAccount" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>