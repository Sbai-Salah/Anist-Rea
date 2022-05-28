<?php
include '../../loginSystem.php';

// add note ------
if( isset($_POST['add']) ){

  function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  $type = validate($_POST['type']);
  $note = validate($_POST['note']);
  $date = date("Y-m-d",time());
  $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);

  $noteQuery = "INSERT INTO notes(type,date,note,id_anesthesiste) VALUES('$type','$date','$note',$id_anesthesiste);";
  $noteResult = mysqli_query($conn, $noteQuery);

}

// delete note -------
if( isset($_POST['delete'])){

  $id = intval($_POST['id']);
  $deleteQuery = "DELETE FROM notes WHERE id=$id;";
  $deleteResult = mysqli_query($conn, $deleteQuery);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    AnistRea
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/img/logo_circle.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-2 font-weight-bold text-white">AnistRea</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Patients & Activités</span>
          </a>
        </li>
        <!-- notes -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notes</span>
          </a>
        </li>
        <!-- Ajouter -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Ajouter</h6>
        </li>
        <!-- Ajouter patients -->
        <li class="nav-item">
          <a class="nav-link text-white " href="Ajouter_patient.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Patient</span>
          </a>
        </li>
        <!-- Ajouter Activité -->
        <li class="nav-item">
          <a class="nav-link text-white " href="Ajouter_activite.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Activité</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
        </li>
        <!-- home -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <!-- profil -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../../profil.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../../logOut.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Notes</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Notes</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-3">
              <h5 class="mb-0">Vos notes</h5>
            </div>
            <div class="card-body p-3 pb-0">

              <?php
                // recuperation des notes :
                $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
                $notesQuery = "SELECT * FROM notes WHERE id_anesthesiste = $id_anesthesiste ORDER BY id DESC;";
                $notesResult = mysqli_query($conn, $notesQuery);
                
                if(mysqli_num_rows($notesResult)>0){
                  while($row = $notesResult->fetch_assoc()){
                    echo '
                    <div class="alert alert-'.$row["type"].' alert-dismissible text-white" role="alert">
                      <span class="text-sm">'.$row["note"].'</span>
                      <span class="text-xs" style="float:right;margin:5px 5px">'.$row["date"].'</span>
                      <form action="" method="post">
                        <input type="text" name="id" value="'.$row["id"].'"style="display:none">
                        <button name="delete" type="submit" class="btn-close text-lg py-3 opacity-10">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </form>
                    </div>
                    ';
                  }
                }
              ?>

            </div>
          </div>

          <!-- create Notes ------------------------ -->
          <div class="card mt-4">
            <div class="card-header p-3">
              <h5 class="mb-0">Créer des Notes</h5>
              <p class="text-sm mb-0">
                Vous puvez ajouter des notifications, des notes ou des notes autocollantes de type que vous voulez.</p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" data-target="successToast">Succès</button>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                  <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" data-target="infoToast">Info</button>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                  <button class="btn bg-gradient-warning w-100 mb-0 toast-btn" type="button" data-target="warningToast">Warning</button>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                  <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button" data-target="dangerToast">Danger</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- add note div --------------------------------------------------- -->

      <div class="position-fixed bottom-1 end-1 z-index-2">
        
        <!-- success -->
        <div class="toast fade hide p-2 bg-white align-items-center" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-success me-2">check</i>
            <span class="me-auto font-weight-bold">Note </span>
            <small class="text-body">Note numero : n°</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Ajouter une note (Succès)
          </div>
          <form action="" method="post">
            <!-- input -->
            <div class="ms-md-auto pe-md-3 d-flex">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" value="success" name="type" style="display:none">
                <input type="text" class="form-control" name="note" value="" required>
              </div>
            </div>
            <!-- ajouter note -->
            <button class="btn bg-gradient-success w-95 mb-0 toast-btn ajouter" type="submit" name="add">Ajouter</button>
          </form>
        </div>

        <!-- info -->
        <div class="toast fade hide p-2 mt-2 bg-white align-items-center" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-info me-2">notifications</i>
            <span class="me-auto font-weight-bold">Note </span>
            <small class="text-body">Note numero : n°</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Ajouter une note (Info)
          </div>
          <form action="" method="post">
            <!-- input -->
            <div class="ms-md-auto pe-md-3 d-flex">
              <div class="input-group input-group-outline">
                <input type="text" value="info" name="type" style="display:none">
                <input type="text" class="form-control" name="note" value="" required>
              </div>
            </div>
            <!-- ajouter note -->
            <button class="btn bg-gradient-info w-95 mb-0 toast-btn ajouter" type="submit" name="add">Ajouter</button>
          </form>
        </div>

        <!-- warning -->
        <div class="toast fade hide p-2 mt-2 bg-white align-items-center" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-warning me-2">travel_explore</i>
            <span class="me-auto font-weight-bold">Note </span>
            <small class="text-body">Note numero : n°</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Ajouter une note (warning)
          </div>
          <form action="" method="post">
            <!-- input -->
            <div class="ms-md-auto pe-md-3 d-flex">
              <div class="input-group input-group-outline">
                <input type="text" value="warning" name="type" style="display:none">
                <input type="text" class="form-control" name="note" value="" required>
              </div>
            </div>
            <!-- ajouter note -->
            <button class="btn bg-gradient-warning w-95 mb-0 toast-btn ajouter" type="submit" name="add">Ajouter</button>
          </form>
        </div>


        <!-- danger -->
        <div class="toast fade hide p-2 mt-2 bg-white align-items-center" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-danger me-2">campaign</i>
            <span class="me-auto font-weight-bold">Note </span>
            <small class="text-body">Note numero : n°</small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Ajouter une note (danger)
          </div>
          <form action="" method="post">
            <!-- input -->
            <div class="ms-md-auto pe-md-3 d-flex">
              <div class="input-group input-group-outline">
                <input type="text" value="danger" name="type" style="display:none">
                <input type="text" class="form-control" name="note" value="" required>
              </div>
            </div>
            <!-- ajouter note -->
            <button class="btn bg-gradient-danger w-95 mb-0 toast-btn ajouter" type="submit" name="add">Ajouter</button>
          </form>
        </div>
      </div>

      <!-- footer -->
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with SMSIS by
                <a href="#" class="font-weight-bold">AnistRea</a>.
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
  <!-- side paramètres -->
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurateur d'interface UI</h5>
          <p>options dashboard</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleurs de Sidebar</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>

        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixé</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Clair / Sombre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="../../profil.php">Editer votre Profil</a>
        <div class="w-100 text-center">
          <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Mersi pour votre partage !</h6>
          <a href="https://twitter.com" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  
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