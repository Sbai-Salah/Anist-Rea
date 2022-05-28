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

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('image/bg_sign_in.webp');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row"  style="margin-top: 2rem;">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <div class="row mt-3">
                    <!-- facebook -->
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" target="blank" href="https://web.facebook.com">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <!-- google -->
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" target="blank" href="https://www.google.com">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                    <!-- instagram -->
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" target="blank" href="https://www.instagram.com">
                        <i class="fa fa-instagram text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card-body">
                <form role="form" class="text-start" action="" method="post">

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
                  <?php if (isset($_GET['loginError'])) { ?>
                    <p class="error" style="text-align:center;"><?php echo $_GET['loginError']; ?></p>
                  <?php } ?>
                  <?php if (isset($_GET['loginSuccess'])) { ?>
                    <p class="success" style="text-align:center;"><?php echo $_GET['loginSuccess']; ?></p>
                  <?php } ?>

                  <div class="input-group input-group-outline my-3">
                    <input title="Email" placeholder="Email" name="loginEmail" value="" type="email" class="form-control" required>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <input title="Password" placeholder="Password" name="loginPassword" value="" type="password" class="form-control" required>
                  </div>

                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                  </div>

                  <div class="text-center">
                    <button type="submit" name="LogIn" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>

                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="sign-up.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with SMSIS by
                <a href="index.php" class="font-weight-bold text-white">AnistRea</a>.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="index.php" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                  <a href="sign-up.php" class="nav-link text-white">Sign Up</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
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